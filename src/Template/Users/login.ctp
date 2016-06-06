<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Cobrança Fácil';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
    <div id="content">
        <div class="row">
            <div class="columns large-6 text-center">
                <h2>Cobrança Fácil</h2>
            </div>

                <div class="columns large-4">
                    <div class="text-center"><h3>Login de Acesso</h3></div>
                    <?= $this->Form->create() ?>
                                  <div class="form-group">
                                    <?= $this->Form->input('email') ?>
                                  </div>
                                  <div class="form-group">
                                    <?= $this->Form->input('senha', array('type' => 'password' )) ?>
                                  </div>
                                  <?= $this->Form->button('Login') ?>
                    <?= $this->Form->end() ?>
                    <?= $this->Flash->render() ?>
                </div>

        </div>



        <hr/>

        <div class="row">
            <div class="columns large-12"><h4>Funcionalidades disponíveis nesta versão</h4></div>
            <div class="columns large-4">
                <ul>
                    <li>Registro de cliente</li>
                    <li>Registro de contratos</li>
                    <li>Vinculo de contrato a cliente</li>
                </ul>
            </div>
            <div class="columns large-4">
                <ul>
                    <li>Registro de cliente</li>
                    <li>Registro de contratos</li>
                    <li>Vinculo de contrato a cliente</li>
                </ul>
            </div>
            <div class="columns large-4">
                <ul>
                    <li>Registro de cliente</li>
                    <li>Registro de contratos</li>
                    <li>Vinculo de contrato a cliente</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
