<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // Get query parameters
        $skillKeyword = $this->request->getQuery('skill_keyword');
        $selectedSkills = $this->request->getQuery('skills._ids');
        $selectedStatus = $this->request->getQuery('status');
        $startDate = $this->request->getQuery('start_date');
        $endDate = $this->request->getQuery('end_date');

        $query = $this->Projects->find()
            ->contain(['Contractors', 'Organisations']);

        // attach search fields from get request to the query using query builder
        // search by skill name keyword
        if (!empty($skillKeyword)) {
            $query->matching('Skills', function ($q) use ($skillKeyword) {
                return $q->where(['Skills.name LIKE' => '%' . $skillKeyword . '%']);
            });
        }
        // filter by selected skills
        if (!empty($selectedSkills)) {
            $query->matching('Skills', function ($q) use ($selectedSkills) {
                return $q->where(['Skills.id IN' => $selectedSkills]);
            });
        }
        // filter by selected status
        if ($selectedStatus !== null && $selectedStatus !== '') {
            $query->where(['Projects.complete' => $selectedStatus]);
        }
        // filter by due date range
        if (!empty($startDate) && !empty($endDate)) {
            $query->where([
                'Projects.due_date >=' => $startDate,
                'Projects.due_date <=' => $endDate
            ]);
        }

        $projects = $this->paginate($query);
        $skills = $this->Projects->Skills->find('list', limit: 200)->all();

        $this->set(compact('projects', 'skills'));
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, contain: ['Contractors', 'Organisations', 'Skills']);
        $this->set(compact('project'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $project = $this->Projects->newEmptyEntity();
        if ($this->request->is('post')) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $contractors = $this->Projects->Contractors->find('list', limit: 200)->all();
        $organisations = $this->Projects->Organisations->find('list', limit: 200)->all();
        $skills = $this->Projects->Skills->find('list', limit: 200)->all();
        $this->set(compact('project', 'contractors', 'organisations', 'skills'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, contain: ['Skills']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $contractors = $this->Projects->Contractors->find('list', limit: 200)->all();
        $organisations = $this->Projects->Organisations->find('list', limit: 200)->all();
        $skills = $this->Projects->Skills->find('list', limit: 200)->all();
        $this->set(compact('project', 'contractors', 'organisations', 'skills'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
