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
            <?= $this->Html->link(__('Edit Organisation'), ['action' => 'edit', $organisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organisation'), ['action' => 'delete', $organisation->id], ['confirm' => __('Are you sure you want to delete the organisation {0}?', $organisation->business_name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="organisations view content">
            <h3><?= h($organisation->business_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Current Website') ?></th>
                    <td><?= $organisation->current_website
                            ? $this->Html->link(
                                h($organisation->current_website),
                                $organisation->current_website,
                                ['target' => '_blank', 'escape' => false]
                            )
                            : '-' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact First Name') ?></th>
                    <td><?= h($organisation->contact_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Last Name') ?></th>
                    <td><?= h($organisation->contact_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Email') ?></th>
                    <td><?= $organisation->contact_email
                            ? $this->Html->link(
                                h($organisation->contact_email),
                                'mailto:' . h($organisation->contact_email),
                                ['escape' => false]
                            )
                            : '-' ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Industry') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($organisation->industry)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Enquiries') ?></h4>
                <?php if (!empty($organisation->enquiries)) : ?>
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
                        <?php foreach ($organisation->enquiries as $enquiry) : ?>
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
                <?php if (!empty($organisation->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Contractor Name') ?></th>
                            <th><?= __('Management Tool Link') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Last Checked') ?></th>
                            <th><?= __('Complete') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($organisation->projects as $project) : ?>
                        <tr>
                            <td><?= h($project->name) ?></td>
                            <td><?= $project->contractor
                                    ? $this->Html->link(
                                        h($project->contractor->first_name . ' ' . $project->contractor->last_name),
                                        ['controller' => 'Contractors', 'action' => 'view', $project->contractor_id])
                                    : '-' ?></td>
                            <td><?= $project->management_tool_link
                                    ? $this->Html->link(
                                        h($project->management_tool_link),
                                        $project->management_tool_link,
                                        ['target' => '_blank', 'escape' => false]
                                    )
                                    : '-' ?></td>
                            <td><?= $this->Time->format($project->due_date, 'dd/MM/yyyy') ?></td>
                            <td><?= $this->Time->format($project->last_checked, 'dd/MM/yyyy') ?></td>
                            <td><?= h($project->complete) ? '<em>Completed</em>' : '<em>In Progress</em>' ?></td>
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
