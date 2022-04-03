<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Proffesion Controller
 *
 * @property \App\Model\Table\ProffesionTable $Proffesion
 * @method \App\Model\Entity\Proffesion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProffesionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $proffesion = $this->paginate($this->Proffesion);

        $this->set(compact('proffesion'));
    }

    /**
     * View method
     *
     * @param string|null $id Proffesion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proffesion = $this->Proffesion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('proffesion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proffesion = $this->Proffesion->newEmptyEntity();
        if ($this->request->is('post')) {
            $proffesion = $this->Proffesion->patchEntity($proffesion, $this->request->getData());
            if ($this->Proffesion->save($proffesion)) {
                $this->Flash->success(__('The proffesion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proffesion could not be saved. Please, try again.'));
        }
        $this->set(compact('proffesion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proffesion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proffesion = $this->Proffesion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proffesion = $this->Proffesion->patchEntity($proffesion, $this->request->getData());
            if ($this->Proffesion->save($proffesion)) {
                $this->Flash->success(__('The proffesion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proffesion could not be saved. Please, try again.'));
        }
        $this->set(compact('proffesion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proffesion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proffesion = $this->Proffesion->get($id);
        if ($this->Proffesion->delete($proffesion)) {
            $this->Flash->success(__('The proffesion has been deleted.'));
        } else {
            $this->Flash->error(__('The proffesion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
