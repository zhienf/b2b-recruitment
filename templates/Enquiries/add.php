<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 * @var \Cake\Collection\CollectionInterface|string[] $contractors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="enquiries form content">
            <?= $this->Form->create($enquiry) ?>
            <fieldset>
                <h3><?= __('Add Enquiry') ?></h3>
                <?php
                    echo $this->Form->control('organisation_id', ['options' => $organisations, 'empty' => true]);
                    echo $this->Form->control('contractor_id', ['options' => $contractors, 'empty' => true]);
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
