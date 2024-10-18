<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contractor> $contractors
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 */
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="contractors index content">
    <?= $this->Html->link(__('New Contractor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contractors') ?></h3>
    <div class="search filter">
        <?= $this->Form->create(null, ['type' => 'get']) ?>
        <fieldset>
            <div class="row">
                <div class="column"><?= $this->Form->control('first_name', [
                        'placeholder' => 'First name contains...',
                        'value' => $this->request->getQuery('first_name'),
                    ]); ?></div>
                <div class="column"><?= $this->Form->control('last_name', [
                        'placeholder' => 'Last name contains...',
                        'value' => $this->request->getQuery('last_name'),
                    ]); ?></div>
                <div class="column"><?= $this->Form->control('email', [
                        'placeholder' => 'Email contains...',
                        'value' => $this->request->getQuery('email'),
                    ]); ?></div>
            </div>

            <div class="row">
                <div class="column"><?= $this->Form->control('sort_by', [
                        'type' => 'select',
                        'options' => [
                            '' => '-- Not selected --',
                            'projects' => 'Number of Projects'
                        ]
                    ]); ?></div>
                <div class="column"><?= $this->Form->control('skills._ids', [
                        'type' => 'select',
                        'options' => $skills,
                        'multiple' => true,
                        'id' => "skills-ids",
                        'label' => "Filter by Skills"
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
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contractors as $contractor): ?>
                <tr>
                    <td><?= h($contractor->id) ?></td>
                    <td><?= h($contractor->first_name) ?></td>
                    <td><?= h($contractor->last_name) ?></td>
                    <td><?= h($contractor->phone_number) ?></td>
                    <td><?= h($contractor->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contractor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id)]) ?>
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
    $(document).ready(function() {
        $('#skills-ids').select2({
            placeholder: "Select skills",
            allowClear: true
        });
    });
</script>
