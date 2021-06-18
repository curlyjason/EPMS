<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderHeader Controller
 *
 * @method \App\Model\Entity\OrderHeader[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderHeaderController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderHeader = $this->paginate($this->OrderHeader);

        $this->set(compact('orderHeader'));
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
        $orderHeader = $this->OrderHeader->get($id, [
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
        $orderHeader = $this->OrderHeader->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderHeader = $this->OrderHeader->patchEntity($orderHeader, $this->request->getData());
            if ($this->OrderHeader->save($orderHeader)) {
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
        $orderHeader = $this->OrderHeader->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderHeader = $this->OrderHeader->patchEntity($orderHeader, $this->request->getData());
            if ($this->OrderHeader->save($orderHeader)) {
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
        $orderHeader = $this->OrderHeader->get($id);
        if ($this->OrderHeader->delete($orderHeader)) {
            $this->Flash->success(__('The order header has been deleted.'));
        } else {
            $this->Flash->error(__('The order header could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
