<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActorPhotos Controller
 *
 * @property \App\Model\Table\ActorPhotosTable $ActorPhotos
 *
 * @method \App\Model\Entity\ActorPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ActorPersonalInfos']
        ];
        $actorPhotos = $this->paginate($this->ActorPhotos);

        $this->set(compact('actorPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Actor Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actorPhoto = $this->ActorPhotos->get($id, [
            'contain' => ['ActorPersonalInfos']
        ]);

        $this->set('actorPhoto', $actorPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actorPhoto = $this->ActorPhotos->newEntity();
        if ($this->request->is('post')) {
            $actorPhoto = $this->ActorPhotos->patchEntity($actorPhoto, $this->request->getData());
            if ($this->ActorPhotos->save($actorPhoto)) {
                $this->Flash->success(__('The actor photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor photo could not be saved. Please, try again.'));
        }
        $actorPersonalInfos = $this->ActorPhotos->ActorPersonalInfos->find('list', ['limit' => 200]);
        $this->set(compact('actorPhoto', 'actorPersonalInfos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actor Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actorPhoto = $this->ActorPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorPhoto = $this->ActorPhotos->patchEntity($actorPhoto, $this->request->getData());
            if ($this->ActorPhotos->save($actorPhoto)) {
                $this->Flash->success(__('The actor photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor photo could not be saved. Please, try again.'));
        }
        $actorPersonalInfos = $this->ActorPhotos->ActorPersonalInfos->find('list', ['limit' => 200]);
        $this->set(compact('actorPhoto', 'actorPersonalInfos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actor Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actorPhoto = $this->ActorPhotos->get($id);
        if ($this->ActorPhotos->delete($actorPhoto)) {
            $this->Flash->success(__('The actor photo has been deleted.'));
        } else {
            $this->Flash->error(__('The actor photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
