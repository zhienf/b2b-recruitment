<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Organisations Controller
 *
 * @property \App\Model\Table\OrganisationsTable $Organisations
 */
class OrganisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $business_name = $this->request->getQuery('business_name');
        $sortBy = $this->request->getQuery('sort_by');

        $query = $this->Organisations->find()
            ->select(['Organisations.id', 'Organisations.business_name', 'Organisations.contact_first_name','Organisations.contact_last_name', 'Organisations.contact_email', 'Organisations.current_website']);

        if (!empty($business_name)) {
            $query->where(['Organisations.business_name LIKE' => '%' . $business_name . '%']);
        }
        if ($sortBy === 'projects') {
            $query->leftJoinWith('Projects')
                ->select(['total_projects' => $query->func()->count('Projects.id')])
                ->groupBy(['Organisations.id'])
                ->orderBy(['total_projects' => 'DESC']);
        }

        $organisations = $this->paginate($query);

        $this->set(compact('organisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organisation = $this->Organisations->get($id, contain: ['Enquiries', 'Projects', 'Projects.Contractors']);
        $this->set(compact('organisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organisation = $this->Organisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organisation = $this->Organisations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organisation = $this->Organisations->get($id);
        if ($this->Organisations->delete($organisation)) {
            $this->Flash->success(__('The organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
