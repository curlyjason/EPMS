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

use Cake\Core\Configure;

$cakeDescription = 'CakePHP: the rapid development php framework';

$jQuery_path = Configure::read('debug')
    ? 'https://code.jquery.com/jquery-3.6.0.js'
    : 'https://code.jquery.com/jquery-3.6.0.min.js';

$this->start('script');
echo $this->Html->script('epms');
$this->end();
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'epms']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script($jQuery_path); ?>

</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>EPMS</span>tools</a>
        </div>
        <div class="top-nav-links">
<!--            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>-->
<!--            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>-->
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
<?= $this->fetch('script') ?>
