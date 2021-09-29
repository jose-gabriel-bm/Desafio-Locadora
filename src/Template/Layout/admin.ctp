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
<nav class="navbar navbar-expand navbar-dark bg-primary">
   
   <a class="sidebar-toggle text-light mr-3"><span class="navbar-toggler-icon"></span></a>

   <a class="navbar-brand" href="#">AxMovie</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

     <div class="collapse navbar-collapse">
       <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                  <span class="d-none d-sm-inline">Usuário</span></a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                 <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
             </div>
           </li>
       </ul>                
     </div>
</nav>

<div class="d-flex">
     <nav class="sidebar">
       <ul class="list-unstyled">
         <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

         <li><a href="#submenu1" data-toggle="collapse">
          <i class="fas fa-user"></i> Usuarios
           </a>
            <ul class="list-unstyled collapse" id="submenu1">
                  <li><a href="ListaUsuarios.html"><i class="fas fa-user-friends"></i> Lista de Usuarios</a></li>
                  <li><a href="CadastrarUsuario.html"><i class="fas fa-user-plus"></i> Adicionar Usuario</a></li>
                  <li><a href="CadastrarFuncao.html"><i class="fas fa-id-badge"></i>  Nova Funçao</a></li>
                  <li><a href="ListaFuncoes.html"><i class="fas fa-id-card"></i> Lista de Funçoes</a></li>
            </ul>
         </li>


            
         <li><a href="#submenu2" data-toggle="collapse">
          <i class="fas fa-house-user"></i>  Clientes
            </a>
              <ul class="list-unstyled collapse" id="submenu2">
                <li><a href="ListaClientes.html"><i class="fas fa-users"></i> Lista de Clientes</a></li>
                <li><a href="CadastrarClientes.html"><i class="fas fa-user-plus"></i> Novo cliente</a></li>
              </ul>
        </li>

            
         <li><a href="#submenu3" data-toggle="collapse">
          <i class="fas fa-film"></i> Filmes
            </a>
              <ul class="list-unstyled collapse" id="submenu3">
                <li><a href="CadastrarFilme.html"><i class="fas fa-plus"></i> Adicionar Filme</a></li>
                <li><a href="ListaFilmes.html"><i class="fas fa-file-video"></i>  Lista de filmes</a></li>
              </ul>
          </li>
          
            
         <li><a href="#submenu4" data-toggle="collapse">
          <i class="fas fa-file-alt"></i> Reservas
            </a>
              <ul class="list-unstyled collapse" id="submenu4">
                <li><a href="CadastrarReserva.html"><i class="fas fa-file-medical"></i> Adicionar Reserva</a></li>
                <li><a href="ListaReservas.html"><i class="fas fa-file-invoice"></i> Lista de Reservas</a></li>
             </ul>
          </li>
         
          <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
      </nav>

      <div class="content p-1">
        <div class="list-group-item">

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
          
        </div>
      </div>
</div>
    
    
    
    <?= $this->Html->script(['jquery-3.6.0.min' , 'popper.min.js' ,'bootstrap.min' ,'dasboard' ]) ?>
</body>
</html>
