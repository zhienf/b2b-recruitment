<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$description = 'B2B Project Recruit';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <?= $this->Html->image('/img/jims-logo.png', [
                'alt' => 'Logo',
                'url' => '/'
            ]) ?>
        </div>
        <div class="top-nav-links">
            <?= $this->Html->link('Contractors', [
                'controller' => 'Contractors',
                'action' => 'index'
            ], []) ?>
            <?= $this->Html->link('Organisations', [
                'controller' => 'Organisations',
                'action' => 'index'
            ], []) ?>
            <?= $this->Html->link('Projects', [
                'controller' => 'Projects',
                'action' => 'index'
            ], []) ?>
            <?= $this->Html->link('Enquiries', [
                'controller' => 'Enquiries',
                'action' => 'index'
            ], []) ?>
            <?= $this->Html->link('Business Website', [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ], []) ?>
            <?php if ($this->Identity->isLoggedIn()): ?>
                <?= $this->Html->link('Logout',
                    [
                        'controller' => 'Users',
                        'action' => 'logout'
                    ],
                    [
                        'class' => 'button logout-button'
                    ]) ?>
            <?php else: ?>
                <?= $this->Html->link('Login',
                    [
                        'controller' => 'Users',
                        'action' => 'login'
                    ],
                    [
                        'class' => 'button login-button'
                    ]) ?>
            <?php endif; ?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
