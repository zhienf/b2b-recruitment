<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organisation $organisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="organisations form content">
            <?= $this->Form->create($organisation) ?>
            <fieldset>
                <h3><?= __('Add Organisation') ?></h3>
                <?php
                echo $this->Form->control('business_name', [
                    'label' => 'Business Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'required' => true,
                    'maxlength' => 255,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('contact_first_name', [
                    'label' => 'Contact First Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'required' => true,
                    'maxlength' => 255,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('contact_last_name', [
                    'label' => 'Contact Last Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'required' => true,
                    'maxlength' => 255,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('contact_email', [
                    'label' => 'Contact Email <span style="color: red;">*</span>',
                    'type' => 'email',
                    'escape' => false,
                    'required' => true,
                    'maxlength' => 255,
                    'class' => 'form-control',
                ]);

                echo $this->Form->control('current_website', [
                    'label' => 'Current Website',
                    'type' => 'url',
                    'class' => 'form-control',
                    'maxlength' => 255,
                    'placeholder' => 'https://example.com'
                ]);

                echo $this->Form->control('industry', [
                    'label' => 'Industry',
                    'maxlength' => 255,
                    'class' => 'form-control'
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
