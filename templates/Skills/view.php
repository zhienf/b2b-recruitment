<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete the skill {0}?', $skill->name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="skills view content">
            <h3><?= h($skill->name) ?></h3>
            <div class="related">
                <h4><?= __('Related Contractors') ?></h4>
                <?php if (!empty($skill->contractors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Email') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->contractors as $contractor) : ?>
                        <tr>
                            <td><?= h($contractor->first_name) ?></td>
                            <td><?= h($contractor->last_name) ?></td>
                            <td><?= h($contractor->phone_number) ?></td>
                            <td><?= $contractor->email
                                    ? $this->Html->link(
                                        h($contractor->email),
                                        'mailto:' . h($contractor->email),
                                        ['escape' => false]
                                    )
                                    : '-' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contractors', 'action' => 'view', $contractor->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                    <p><?= __('<em>No related contractors.</em>') ?></p>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($skill->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Management Tool Link') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Last Checked') ?></th>
                            <th><?= __('Complete') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->projects as $project) : ?>
                        <tr>
                            <td><?= h($project->name) ?></td>
                            <td><?= $project->management_tool_link
                                    ? $this->Html->link(
                                        h($project->management_tool_link),
                                        $project->management_tool_link,
                                        ['target' => '_blank', 'escape' => false]
                                    )
                                    : '' ?></td>
                            <td><?= h($project->due_date) ?></td>
                            <td><?= h($project->last_checked) ?></td>
                            <td><?= $project->complete ? __('<em>Completed</em>') : __('<em>In Progress</em>'); ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $project->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                    <p><?= __('<em>No related projects.</em>') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
