<?php


$cakeDescription = 'Administrativo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->Html->script(['jquery-3.6.0.min' ,'bootstrap.bundle.min' ]) ?>
    <?= $this->Html->css(['dashboard']) ?>

    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

  <?= $this->element('cabecalho')?>

  <div class="d-flex">
        <?= $this->element('menu')?>
        <div class="content p-1">
        <div class="list-group-item">

        <?= $this->fetch('content') ?>
        
        </div>
      </div>
  </div>
  
  
    
    <?= $this->Html->script(['jquery-3.6.0.min' , 'popper.min.js' ,'bootstrap.min' ,'dasboard' ]) ?>
</body>
</html>
