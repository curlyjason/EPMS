<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderHeaders Controller
 *
 * @property \App\Model\Table\OrderHeadersTable $OrderHeaders
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderHeadersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderHeaders = $this->paginate($this->OrderHeaders);

        $this->set(compact('orderHeaders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Header id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderHeader = $this->OrderHeaders->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orderHeader'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderHeader = $this->OrderHeaders->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderHeader = $this->OrderHeaders->patchEntity($orderHeader, $this->request->getData());
            if ($this->OrderHeaders->save($orderHeader)) {
                $this->Flash->success(__('The order header has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order header could not be saved. Please, try again.'));
        }
        $this->set(compact('orderHeader'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Header id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderHeader = $this->OrderHeaders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderHeader = $this->OrderHeaders->patchEntity($orderHeader, $this->request->getData());
            if ($this->OrderHeaders->save($orderHeader)) {
                $this->Flash->success(__('The order header has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order header could not be saved. Please, try again.'));
        }
        $this->set(compact('orderHeader'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Header id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderHeader = $this->OrderHeaders->get($id);
        if ($this->OrderHeaders->delete($orderHeader)) {
            $this->Flash->success(__('The order header has been deleted.'));
        } else {
            $this->Flash->error(__('The order header could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
