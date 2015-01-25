<!-- app/View/Users/login.ctp -->
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor, introduce tu nombre y contraseña'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'Nombre usuario'));
        echo $this->Form->input('password', array('label' => 'Contraseña'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link( "Crear usuario",   array('action'=>'add') ); 
?>