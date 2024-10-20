<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Organisation> $organisations
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div class="organisations index content">
    <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Organisations') ?></h3>
    <div class="search filter">
        <?= $this->Form->create(null, ['type' => 'get']) ?>
        <fieldset>
            <div class="row">
                <div class="column"><?= $this->Form->control('business_name', [
                        'placeholder' => 'Business name contains...',
                        'value' => $this->request->getQuery('business_name'),
                    ]); ?></div>
                <div class="column"><?= $this->Form->control('sort_by', [
                        'type' => 'select',
                        'id' => "sort-by",
                        'options' => [
                            '' => '-- Not selected --',
                            'projects' => 'Number of Projects'
                        ]
                    ]); ?></div>
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
                    <th><?= $this->Paginator->sort('business_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_first_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_last_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_email') ?></th>
                    <th><?= $this->Paginator->sort('current_website') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organisations as $organisation): ?>
                <tr>
                    <td><?= h($organisation->id) ?></td>
                    <td><?= h($organisation->business_name) ?></td>
                    <td><?= h($organisation->contact_first_name) ?></td>
                    <td><?= h($organisation->contact_last_name) ?></td>
                    <td><?= $organisation->contact_email
                            ? $this->Html->link(
                                h($organisation->contact_email),
                                'mailto:' . h($organisation->contact_email),
                                ['escape' => false]
                            )
                            : '' ?></td>
                    <td><?= $organisation->current_website
                            ? $this->Html->link(
                                h($organisation->current_website),
                                $organisation->current_website,
                                ['target' => '_blank', 'escape' => false]
                            )
                            : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organisation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organisation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organisation->id)]) ?>
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
    const sortByElement = document.querySelector('#sort-by');
    const sortByChoices = new Choices(sortByElement, {singleModeForMultiSelect: false});
</script>
