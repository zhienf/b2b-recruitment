<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Enquiry> $enquiries
 */
?>
<div class="enquiries index content">
    <?= $this->Html->link(__('New Enquiry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enquiries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('organisation_id') ?></th>
                    <th><?= $this->Paginator->sort('contractor_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $enquiry): ?>
                <tr>
                    <td><?= h($enquiry->id) ?></td>
                    <td><?= $enquiry->hasValue('organisation') ? $this->Html->link($enquiry->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $enquiry->organisation->id]) : '' ?></td>
                    <td><?= $enquiry->hasValue('contractor') ? $this->Html->link($enquiry->contractor->first_name, ['controller' => 'Contractors', 'action' => 'view', $enquiry->contractor->id]) : '' ?></td>
                    <td><?= h($enquiry->first_name) ?></td>
                    <td><?= h($enquiry->last_name) ?></td>
                    <td><?= h($enquiry->email) ?></td>
                    <td><?= h($enquiry->phone_number) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquiry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
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