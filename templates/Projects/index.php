<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Project> $projects
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div class="projects index content">
    <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projects') ?></h3>
    <div class="search filter">
        <?= $this->Form->create(null, ['type' => 'get']) ?>
        <fieldset>
            <div class="row">
                <div class="column"><?= $this->Form->control('skill_keyword', [
                        'placeholder' => 'Skill name contains...',
                        'value' => $this->request->getQuery('skill_keyword'),
                    ]); ?></div>
                <div class="column"><?= $this->Form->control('skills._ids', [
                        'type' => 'select',
                        'options' => $skills,
                        'multiple' => true,
                        'id' => "skills-ids",
                        'label' => "Filter by Skills",
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="column"><?= $this->Form->control('status', [
                        'type' => 'select',
                        'options' => [
                            '' => '-- Not selected --',
                            0 => 'In Progress',
                            1 => 'Completed'
                        ],
                        'id' => "status",
                        'label' => "Filter by Status",
                    ]); ?>
                </div>
                <div class="column"><?= $this->Form->control('start_date', [
                        'type' => 'date',
                        'label' => 'Start Due Date',
                        'empty' => true,
                        'value' => $this->request->getQuery('start_date'),
                    ]); ?>
                </div>
                <div class="column"><?= $this->Form->control('end_date', [
                        'type' => 'date',
                        'label' => 'End Due Date',
                        'empty' => true,
                        'value' => $this->request->getQuery('end_date'),
                    ]); ?>
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Search')) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('management_tool_link') ?></th>
                    <th><?= $this->Paginator->sort('due_date') ?></th>
                    <th><?= $this->Paginator->sort('last_checked') ?></th>
                    <th><?= $this->Paginator->sort('complete') ?></th>
                    <th><?= $this->Paginator->sort('contractor_id') ?></th>
                    <th><?= $this->Paginator->sort('organisation_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= h($project->id) ?></td>
                    <td><?= h($project->name) ?></td>
                    <td><?= $project->management_tool_link
                            ? $this->Html->link(
                                h($project->management_tool_link),
                                $project->management_tool_link,
                                ['target' => '_blank', 'escape' => false]
                            )
                            : '' ?></td>
                    <td><?= $this->Time->format($project->due_date, 'dd/MM/yyyy') ?></td>
                    <td><?= $this->Time->format($project->last_checked, 'dd/MM/yyyy') ?></td>
                    <td><?= h($project->complete) ? 'Completed' : 'In Progress' ?></td>
                    <td><?= $project->hasValue('contractor') ? $this->Html->link($project->contractor->first_name . ' ' . $project->contractor->last_name, ['controller' => 'Contractors', 'action' => 'view', $project->contractor->id]) : '' ?></td>
                    <td><?= $project->hasValue('organisation') ? $this->Html->link($project->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $project->organisation->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<script>
    const skillsElement = document.querySelector('#skills-ids');
    const skillsChoices = new Choices(skillsElement, {
        removeItems: true,
        removeItemButton: true
    });

    const statusElement = document.querySelector('#status');
    const statusChoices = new Choices(statusElement, {singleModeForMultiSelect: false});
</script>
