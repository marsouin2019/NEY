<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TProprietaire Controller
 *
 * @property \App\Model\Table\TProprietaireTable $TProprietaire
 *
 * @method \App\Model\Entity\TProprietaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TProprietaireController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tProprietaire = $this->paginate($this->TProprietaire);

        $this->set(compact('tProprietaire'));
    }

    /**
     * View method
     *
     * @param string|null $id T Proprietaire id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tProprietaire = $this->TProprietaire->get($id, [
            'contain' => [],
        ]);

        $this->set('tProprietaire', $tProprietaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tProprietaire = $this->TProprietaire->newEntity();
        if ($this->request->is('post')) {
            $tProprietaire = $this->TProprietaire->patchEntity($tProprietaire, $this->request->getData());
            if ($this->TProprietaire->save($tProprietaire)) {
                $this->Flash->success(__('The t proprietaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t proprietaire could not be saved. Please, try again.'));
        }
        $this->set(compact('tProprietaire'));
    }

    /**
     * Edit method
     *
     * @param string|null $id T Proprietaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tProprietaire = $this->TProprietaire->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tProprietaire = $this->TProprietaire->patchEntity($tProprietaire, $this->request->getData());
            if ($this->TProprietaire->save($tProprietaire)) {
                $this->Flash->success(__('The t proprietaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t proprietaire could not be saved. Please, try again.'));
        }
        $this->set(compact('tProprietaire'));
    }

    /**
     * Delete method
     *
     * @param string|null $id T Proprietaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tProprietaire = $this->TProprietaire->get($id);
        if ($this->TProprietaire->delete($tProprietaire)) {
            $this->Flash->success(__('The t proprietaire has been deleted.'));
        } else {
            $this->Flash->error(__('The t proprietaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
