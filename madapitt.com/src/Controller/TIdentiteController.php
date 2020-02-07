<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TIdentite Controller
 *
 * @property \App\Model\Table\TIdentiteTable $TIdentite
 *
 * @method \App\Model\Entity\TIdentite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TIdentiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tIdentite = $this->paginate($this->TIdentite);

        $this->set(compact('tIdentite'));
    }

    public function display()
    {
        $this->layout = 'home';

    }

    /**
     * View method
     *
     * @param string|null $id T Identite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tIdentite = $this->TIdentite->get($id, [
            'contain' => [],
        ]);

        $this->set('tIdentite', $tIdentite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tIdentite = $this->TIdentite->newEntity();
        if ($this->request->is('post')) {
            $tIdentite = $this->TIdentite->patchEntity($tIdentite, $this->request->getData());
            if ($this->TIdentite->save($tIdentite)) {
                $this->Flash->success(__('The t identite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t identite could not be saved. Please, try again.'));
        }
        $this->set(compact('tIdentite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id T Identite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tIdentite = $this->TIdentite->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tIdentite = $this->TIdentite->patchEntity($tIdentite, $this->request->getData());
            if ($this->TIdentite->save($tIdentite)) {
                $this->Flash->success(__('The t identite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t identite could not be saved. Please, try again.'));
        }
        $this->set(compact('tIdentite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id T Identite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tIdentite = $this->TIdentite->get($id);
        if ($this->TIdentite->delete($tIdentite)) {
            $this->Flash->success(__('The t identite has been deleted.'));
        } else {
            $this->Flash->error(__('The t identite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
