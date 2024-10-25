<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contractor'), ['action' => 'edit', $contractor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contractor'), ['action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contractors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contractor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="contractors view content">
            <h3><?= h($contractor->first_name . ' ' . $contractor->last_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($contractor->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($contractor->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($contractor->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $contractor->email
                            ? $this->Html->link(
                                h($contractor->email),
                                'mailto:' . h($contractor->email),
                                ['escape' => false]
                            )
                            : '' ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Skills') ?></h4>
                <?php if (!empty($contractor->skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <?php foreach ($contractor->skills as $skill) : ?>
                        <tr>
                            <td><?= h($skill->name) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                    <p><?= __('<em>No related skills.</em>') ?></p>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Enquiries') ?></h4>
                <?php if (!empty($contractor->enquiries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Message') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contractor->enquiries as $enquiry) : ?>
                        <tr>
                            <td><?= h($enquiry->first_name) ?></td>
                            <td><?= h($enquiry->last_name) ?></td>
                            <td><?= $enquiry->email
                                    ? $this->Html->link(
                                        h($enquiry->email),
                                        'mailto:' . h($enquiry->email),
                                        ['escape' => false]
                                    )
                                    : '-' ?></td>
                            <td><?= h($enquiry->phone_number) ?></td>
                            <td><?= h($enquiry->message) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Manage'), ['controller' => 'Enquiries', 'action' => 'view', $enquiry->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enquiries', 'action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                    <p><?= __('<em>No related enquiries.</em>') ?></p>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($contractor->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Organisation Name') ?></th>
                            <th><?= __('Management Tool Link') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Last Checked') ?></th>
                            <th><?= __('Complete') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contractor->projects as $project) : ?>
                        <tr>
                            <td><?= h($project->name) ?></td>
                            <td><?= $this->Html->link(h($project->organisation->business_name), ['controller' => 'Organisations', 'action' => 'view', $project->organisation_id]) ?></td>
                            <td><?= $project->management_tool_link
                                    ? $this->Html->link(
                                        h($project->management_tool_link),
                                        $project->management_tool_link,
                                        ['target' => '_blank', 'escape' => false]
                                    )
                                    : '' ?></td>
                            <td><?= $this->Time->format($project->due_date, 'dd/MM/yyyy') ?></td>
                            <td><?= $this->Time->format($project->last_checked, 'dd/MM/yyyy') ?></td>
                            <td><?= h($project->complete) ? '<em>Completed</em>' : '<em>In Progress</em>' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $project->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $project->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
