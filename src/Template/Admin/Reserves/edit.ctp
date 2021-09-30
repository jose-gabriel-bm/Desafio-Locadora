
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Editar Reserva</h2>
            </div> 
              <div class="p-2">
                    <?= $this->Html->link(__('lista de Reservas'),['controller' => 'reserves', 'action' => 'index'],
                    ['class'=>'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Visualizar Reserva'),['controller' => 'reserves', 'action' => 'view'],
                    ['class'=>'btn btn-outline-warning btn-sm']) ?>
                    <?= $this->Form->postlink(__('Apagar'), ['controller' => 'reserves', 'action' => 'delete',$reserve->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados?', $reserve->id)]) ?>
              </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($reserve) ?>  

          <div class="form-row">

            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Id_movies </label>
              <?php echo $this->Form->control('id_movies',array('options' => $filmes, 'empty'=>'Selecione um filme','label' => false));?>
            </div>

            <div class="col-md-4">
              <label><span class="text-danger">*</span>Id_clientes</label>
              <?php echo $this->Form->control('id_clients',array('options' => $clients, 'empty'=>'Selecione um cliente','label' => false)); ?>
            </div>
            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Valor da Reserva </label>
              <?= $this->Form->control('reserves_value', ['class' => 'form-control',
              'placeholder' => 'Ex: 00.00','label' => false]) ?>
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> data locacao </label>
              <?= $this->Form->control('data_locacao', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>

            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> data devolução </label>
              <?= $this->Form->control('data_devolucao', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
                   

            <div class="col-md-4">
              <label><span class="text-danger">*</span>Filme Devolvido?</label>
              <?= $this->Form->control('devolvido', ['class' => 'form-control',
              'placeholder' => 'Ex: Sim ou Não','label' => false]) ?>
            </div>
          </div>
          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-warning">Salvar</button>
          </div>
        <?= $this->Form->end() ?>

        
