<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Contractors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="contractors form content">
            <?= $this->Form->create($contractor, ['id' => 'addContractorForm']) ?>
            <fieldset>
                <h3><?= __('Add Contractor') ?></h3>
                <?php
                echo $this->Form->control('first_name', [
                    'label' => 'First Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('last_name', [
                    'label' => 'Last Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('phone_number', [
                    'label' => 'Phone Number <span style="color: red;">*</span>',
                    'escape' => false,
                    'maxlength' => 12,
                    'pattern' => '0[23478]\d{8}',
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('email', [
                    'label' => 'Email <span style="color: red;">*</span>',
                    'type' => 'email',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('skills._ids', [
                    'options' => $skills,
                    'multiple' => true,
                    'label' => 'Skills <span style="color: red;">*</span>',
                    'escape' => false,
                    'class' => 'form-control'
                ]);
                ?>
                <div class="invalid-feedback" id="skills-feedback">Please select at least one skill.</div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    document.getElementById('addContractorForm').addEventListener('submit', function(event) {
        const skillsField = document.querySelector('#skills-ids');
        const skillsFeedback = document.querySelector('#skills-feedback');

        if (!skillsField.value) {
            event.preventDefault();  // Prevent form submission
            skillsField.classList.add('is-invalid');
            skillsFeedback.style.display = 'block';
        } else {
            skillsField.classList.remove('is-invalid');
            skillsFeedback.style.display = 'none';
        }
    });

    const element = document.querySelector('#skills-ids');
    const choices = new Choices(element, {
        removeItems: true,
        removeItemButton: true
    });
</script>

