<?php if (!empty($this->validationErrors)) { ?>
    <div class="box">  
        <div class="flash_error">        
            <?php echo $this->Html->image('test-fail-icon.png', array('alt' => 'flash_error')) ?>   
            <?php echo "Existen errores en la forma corrigalos antes de continuar" ?>
        </div>
    </div>
<?php } ?>
<div class="box">
    <div class="title"><h2>Modificar Departamento</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Departamento');
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Nombre');
        echo $this->Form->input('NOMBRE', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";
        echo $this->Form->label('Codigo');
        echo $this->Form->input('CODIGO', array('div' => false, 'label' => false, 'class' => 'medium'));
        echo "</div>";
        echo "</div>";        
        ?>
    </div>
</div>

<div class="box">
    <div class="title"><h2>Acciones</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <div class="row">
            <?php echo $this->Form->end('Guardar Cambios'); ?>
        </div>
        <div class="row boton">
            <div class="boton">
                <?php echo $this->Html->link('Regresar', array('action' => 'index')); ?>
            </div>              
        </div>  
    </div>
</div>
