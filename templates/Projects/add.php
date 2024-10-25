<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $contractors
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="projects form content">
            <?= $this->Form->create($project, ['id' => 'addProjectForm']) ?>
            <fieldset>
                <h3><?= __('Add Project') ?></h3>
                <?php
                echo $this->Form->control('name', [
                    'label' => 'Name <span style="color: red;">*</span>',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('description', [
                    'label' => 'Description <span style="color: red;">*</span>',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('management_tool_link', [
                    'label' => 'Management Tool Link <span style="color: red;">*</span>',
                    'type' => 'url',
                    'escape' => false,
                    'maxlength' => 255,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('due_date', [
                    'type' => 'date',
                    'label' => 'Due Date <span style="color: red;">*</span>',
                    'escape' => false,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('last_checked', [
                    'type' => 'date',
                    'label' => 'Last Checked <span style="color: red;">*</span>',
                    'escape' => false,
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('complete', [
                    'label' => 'Complete',
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('contractor_id', [
                    'options' => $contractors,
                    'label' => 'Contractor',
                    'empty' => '-- Select a contractor --',
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('organisation_id', [
                    'options' => $organisations,
                    'label' => 'Organisation <span style="color: red;">*</span>',
                    'escape' => false,
                    'empty' => '-- Select an organisation --',
                    'required' => true,
                    'class' => 'form-control'
                ]);

                echo $this->Form->control('skills._ids', [
                    'options' => $skills,
                    'multiple' => true,
                    'label' => 'Skills Required <span style="color: red;">*</span>',
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
    document.getElementById('addProjectForm').addEventListener('submit', function(event) {
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
