<div class="box">
    <div class="title"><h2>Datos del Departamento</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Departamento');
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
            <?php echo $this->Form->end(__('Agregar Departamento', true)); ?>

        </div>
    </div>
</div>