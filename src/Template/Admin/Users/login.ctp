<?= $this->Form->create('post',['class' => 'form-signin']) ?>

<?= $this->Html->image('login.png', ['class' => 'mb-4', 'alt' => 'AxMoviel','width' => '72',
 'height' => '72'])?>

<h1 class="h3 mb-3 font-weight-normal">Bem vindo AxMovie</h1>

        <?= $this->Flash->render(); ?>

    <div class="form-group">
            <label >Usuario</label>
            <?= $this->Form->control('username',['class' => 'form-control',  
            'placeholder' => 'Digite seu Usuario', 'label' => false])?>
    </div>
    <div class="form-group">
            <label >Senha</label>
            <?= $this->Form->control('password',['class' => 'form-control',  
            'placeholder' => 'Digite sua Senha', 'label' => false])?>
    </div>  
   
    <?= $this->Form->button(__('Logar',),['class' => 'btn btn-lg btn-primary btn-block',]) ?>
    <br>
    Ainda nao e cadastrado?
    <?= $this->Html->link(__('Cadastre-se'), ['controller' => 'Users','action' =>'add']) ?> 
    <?= $this->Form->end() ?>

    