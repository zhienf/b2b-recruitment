<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Enquiries Controller
 *
 * @property \App\Model\Table\EnquiriesTable $Enquiries
 * @property \Cake\Controller\Component|\Cake\ORM\Table|mixed|null $Authentication
 */
class EnquiriesController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        // Make the current controller to use Freelancer layout
        $this->viewBuilder()->setLayout('default');

        $this->Authentication->addUnauthenticatedActions(['add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Enquiries->find()
            ->contain(['Organisations', 'Contractors']);
        $enquiries = $this->paginate($query);

        $this->set(compact('enquiries'));
    }

    /**
     * View method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiries->get($id, contain: ['Organisations', 'Contractors']);
        $this->set(compact('enquiry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiries->newEmptyEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('Your message has been sent. Thank you!'));
            } else {
                $this->Flash->error(__('Your message could not be sent. Please, try again.'));
            }
            return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'contact']);
        }
        $organisations = $this->Enquiries->Organisations->find('list', limit: 200)->all();
        $contractors = $this->Enquiries->Contractors->find('list', limit: 200)->all();
        $this->set(compact('enquiry', 'organisations', 'contractors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquiry = $this->Enquiries->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('Organisation / Contractor updated successfully.'));

                return $this->redirect(['action' => 'view', $enquiry->id]);
            }
            $this->Flash->error(__('Organisation / Contractor could not be updated. Please, try again.'));
        }
        $organisations = $this->Enquiries->Organisations->find('list', limit: 200)->all();
        $contractors = $this->Enquiries->Contractors->find('list', limit: 200)->all();
        $this->set(compact('enquiry', 'organisations', 'contractors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiries->get($id);
        if ($this->Enquiries->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function switchReplyStatus($id = null)
    {
        // Find the record
        $enquiry = $this->Enquiries->get($id);

        // Flip the general availability field value
        $enquiry->replied = !$enquiry->replied;

        // Save the changes
        if ($this->Enquiries->save($enquiry)) {
            $this->Flash->success($enquiry->replied ? __('Enquiry successfully marked as replied.') : __('Enquiry successfully marked as not replied.'));
        } else {
            $this->Flash->error(__('The enquiry reply status could not be updated. Please, try again.'));
        }

        return $this->redirect(['action' => 'view', $enquiry->id]);
    }
}
