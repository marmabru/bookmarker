<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;




/**
 * Actors Controller
 *
 * @property \App\Model\Table\ActorsTable $Actors
 *
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorsController extends AppController
{
    use TranslateTrait; // activate Translate Trait for Translations

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'ActorPhotos']
        ];
        $actors = $this->paginate($this->Actors);

        $this->set(compact('actors', 'users'));
    }

    /**
     * View method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actor = $this->Actors->get($id, [
            'contain' => ['Users', 'ActorPhotos','SportSkills','LanguageSkills','DanceSkills','Experiences']
        ]);

        $experiences = TableRegistry::get('Experiences');
        $all_experiences = $experiences
          ->find()
          ->order(['year_start' => 'DESC'])
          ->toArray();

        $this->set(compact('actor', 'users', 'all_experiences'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $actor = $this->Actors->newEntity();
        if ($this->request->is('post')) {
            $actor = $this->Actors->patchEntity($actor, $this->request->getData());
            if ($this->Actors->save($actor)) {
                $this->Flash->success(__('The actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $users = $this->Actors->Users->find('list', ['limit' => 200]);

        $this->set(compact('actor', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actor = $this->Actors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actor = $this->Actors->patchEntity($actor, $this->request->getData());
            if ($this->Actors->save($actor)) {
                $this->Flash->success(__('The actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $users = $this->Actors->Users->find('list', ['limit' => 200]);
        $this->set(compact('actor', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actor = $this->Actors->get($id);
        if ($this->Actors->delete($actor)) {
            $this->Flash->success(__('The actor has been deleted.'));
        } else {
            $this->Flash->error(__('The actor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Search method
     *
     * @return \Cake\Http\Response|null Performs search shows the list of results
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function search()
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $searchCrits = $this->request->getData();


            $query = $this->Actors->find('all', ['contain' => ['DanceSkills', 'LanguageSkills']]);

            // Now add the WHERE parts by iterating over the searchCrits
            foreach ($searchCrits as $searchKey => $searchValue) {
              if ($searchValue) {       // only include searchKeys where the user set a value
                if ($searchKey == 'playing_age') {    // playing_age is a range
                  $query = $query->where(['playing_age_from <' => $searchValue]);
                  $query = $query->where(['playing_age_to >' => $searchValue]);
                } else if ($searchKey == 'dance_skill_1') {
                  $skill = $searchValue;
                } else if ($searchKey == 'dance_skill_1_level') {
                  $skillLevel = $searchValue;
                  $subquery = $this->Actors->DanceSkills->find('all')
                    ->select(['actor_id'])
                    ->where(['skill =' => $skill])
                    ->andwhere(['level >=' => $skillLevel]);
                  $query = $query->where(['Actors.id' => $subquery], ['Actors.id' => 'integer[]']);
                } else {
                  $query = $query->where([$searchKey => $searchValue]);
                }
              }
            }

            $this->paginate = [
                'contain' => ['Users', 'ActorPhotos', 'DanceSkills']
            ];

            $actors = $this->paginate($query);

            $users = $this->Actors->Users->find('list', ['limit' => 200]); // FIXME: Hier sollten die User gesucht werden, die in dem Query-Ergebnis für $actors referenziert werden
            $this->set(compact('actors', $this->paginate($query), 'users'));

            $this->render('/Actors/index');
          }

    }

    /**
     * Stuff to do always before handing control to a controller function
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
          parent::beforeFilter($event); // don't forget to execute our parents filters...

          /*
           *  Set Mapping Arrays
           */
          $genderList = $this->Actors->getGenderList();
          $this->set(compact('genderList'));

          $haircolorList = $this->Actors->getHaircolorList();
          $this->set(compact('haircolorList'));

          $roleList = $this->Actors->getRoleList();
          $this->set(compact('roleList'));

          $sportSkillList = $this->Actors->getSportSkillList();
          $this->set(compact('sportSkillList'));

          $languageSkillList = $this->Actors->getLanguageSkillList();
          $this->set(compact('languageSkillList'));

          $danceSkillList = $this->Actors->getDanceSkillList();
          $this->set(compact('danceSkillList'));

          $query = $this->Actors->Eyecolors->find('list', [
            'keyField' => 'id',
            'valueField' => 'eyecolor']);
          $eyecolorList = $query->toArray();

          $this->set(compact('eyecolorList'));
    }
}
