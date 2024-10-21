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
            <?= $this->Form->create($project) ?>
            <fieldset>
                <h3><?= __('Add Project') ?></h3>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('management_tool_link');
                    echo $this->Form->control('due_date');
                    echo $this->Form->control('last_checked');
                    echo $this->Form->control('complete');
                    echo $this->Form->control('contractor_id', ['options' => $contractors, 'empty' => true]);
                    echo $this->Form->control('organisation_id', ['options' => $organisations]);
                    echo $this->Form->control('skills._ids', [
                        'options' => $skills,
                        'multiple' => true
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    const element = document.querySelector('#skills-ids');
    const choices = new Choices(element, {
        removeItems: true,
        removeItemButton: true
    });
</script>
