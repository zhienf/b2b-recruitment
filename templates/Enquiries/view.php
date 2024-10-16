<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Enquiry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="enquiries view content">
            <h3><?= h($enquiry->first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($enquiry->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Organisation') ?></th>
                    <td><?= $enquiry->hasValue('organisation') ? $this->Html->link($enquiry->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $enquiry->organisation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contractor') ?></th>
                    <td><?= $enquiry->hasValue('contractor') ? $this->Html->link($enquiry->contractor->first_name, ['controller' => 'Contractors', 'action' => 'view', $enquiry->contractor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($enquiry->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($enquiry->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($enquiry->phone_number) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($enquiry->message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>