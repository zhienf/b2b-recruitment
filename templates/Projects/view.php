<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="projects view content">
            <h3><?= h($project->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($project->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($project->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Management Tool Link') ?></th>
                    <td><?= $project->management_tool_link
                            ? $this->Html->link(
                                h($project->management_tool_link),
                                $project->management_tool_link,
                                ['target' => '_blank', 'escape' => false]
                            )
                            : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contractor') ?></th>
                    <td><?= $project->hasValue('contractor') ? $this->Html->link($project->contractor->first_name, ['controller' => 'Contractors', 'action' => 'view', $project->contractor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Organisation') ?></th>
                    <td><?= $project->hasValue('organisation') ? $this->Html->link($project->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $project->organisation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= $this->Time->format($project->due_date, 'dd/MM/yyyy') ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Checked') ?></th>
                    <td><?= $this->Time->format($project->last_checked, 'dd/MM/yyyy') ?></td>
                </tr>
                <tr>
                    <th><?= __('Complete') ?></th>
                    <td><?= $project->complete ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Skills') ?></h4>
                <?php if (!empty($project->skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->skills as $skill) : ?>
                        <tr>
                            <td><?= h($skill->id) ?></td>
                            <td><?= h($skill->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skill->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skill->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
