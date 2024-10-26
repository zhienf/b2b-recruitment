<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var string[]|\Cake\Collection\CollectionInterface $contractors
 * @var string[]|\Cake\Collection\CollectionInterface $organisations
 * @var string[]|\Cake\Collection\CollectionInterface $skills
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete the project {0}?', $project->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="projects form content">
            <?= $this->Form->create($project, ['id' => 'editProjectForm']) ?>
            <fieldset>
                <h3><?= __('Edit Project') ?></h3>
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
    const skillsElement = document.querySelector('#skills-ids');
    const skillsChoices = new Choices(skillsElement, {
        removeItems: true,
        removeItemButton: true
    });
</script>
