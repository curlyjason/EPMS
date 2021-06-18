<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialUnitCosts Controller
 *
 * @property \App\Model\Table\MaterialUnitCostsTable $MaterialUnitCosts
 * @method \App\Model\Entity\MaterialUnitCost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialUnitCostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $materialUnitCosts = $this->paginate($this->MaterialUnitCosts);

        $this->set(compact('materialUnitCosts'));
    }

    /**
     * View method
     *
     * @param string|null $id Material Unit Cost id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialUnitCost = $this->MaterialUnitCosts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('materialUnitCost'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialUnitCost = $this->MaterialUnitCosts->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialUnitCost = $this->MaterialUnitCosts->patchEntity($materialUnitCost, $this->request->getData());
            if ($this->MaterialUnitCosts->save($materialUnitCost)) {
                $this->Flash->success(__('The material unit cost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material unit cost could not be saved. Please, try again.'));
        }
        $this->set(compact('materialUnitCost'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Material Unit Cost id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialUnitCost = $this->MaterialUnitCosts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialUnitCost = $this->MaterialUnitCosts->patchEntity($materialUnitCost, $this->request->getData());
            if ($this->MaterialUnitCosts->save($materialUnitCost)) {
                $this->Flash->success(__('The material unit cost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material unit cost could not be saved. Please, try again.'));
        }
        $this->set(compact('materialUnitCost'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Material Unit Cost id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialUnitCost = $this->MaterialUnitCosts->get($id);
        if ($this->MaterialUnitCosts->delete($materialUnitCost)) {
            $this->Flash->success(__('The material unit cost has been deleted.'));
        } else {
            $this->Flash->error(__('The material unit cost could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
