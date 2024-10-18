<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contractors Controller
 *
 * @property \App\Model\Table\ContractorsTable $Contractors
 */
class ContractorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $skillsList = $this->Contractors->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        // Get query parameters
        $firstName = $this->request->getQuery('first_name');
        $lastName = $this->request->getQuery('last_name');
        $email = $this->request->getQuery('email');
        $sortBy = $this->request->getQuery('sort_by');
        $selectedSkills = $this->request->getQuery('skills._ids');

        $query = $this->Contractors->find();

        // attach search fields from get request to the query using query builder
        if (!empty($firstName)) {
            $query->where(['Contractors.first_name LIKE' => '%' . $firstName . '%']);
        }
        if (!empty($lastName)) {
            $query->where(['Contractors.last_name LIKE' => '%' . $lastName . '%']);
        }
        if (!empty($email)) {
            $query->where(['Contractors.email LIKE' => '%' . $email . '%']);
        }
        // checks if the value is null or empty ""
        if ($sortBy === 'projects') {
            $query->orderBy(['total_projects' => 'DESC']);
        }
        if (!empty($selectedSkills)) {
            $query->matching('Skills', function ($q) use ($selectedSkills) {
                return $q->where(['Skills.id IN' => $selectedSkills]);
            });
        }

        $contractors = $this->paginate($query);
        $skills = $this->Contractors->Skills->find('list', limit: 200)->all();

        $this->set(compact('contractors', 'skillsList', 'skills'));
    }

    /**
     * View method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractor = $this->Contractors->get($id, contain: ['Skills', 'Enquiries', 'Projects']);
        $this->set(compact('contractor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractor = $this->Contractors->newEmptyEntity();
        if ($this->request->is('post')) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $skills = $this->Contractors->Skills->find('list', limit: 200)->all();
        $this->set(compact('contractor', 'skills'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractor = $this->Contractors->get($id, contain: ['Skills']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $skills = $this->Contractors->Skills->find('list', limit: 200)->all();
        $this->set(compact('contractor', 'skills'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractor = $this->Contractors->get($id);
        if ($this->Contractors->delete($contractor)) {
            $this->Flash->success(__('The contractor has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
