    <script type="text/javascript" src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Contatos</small>
      </h1>
    </section>
    <?php
      error_reporting(E_ALL);

      $sql = "SELECT * FROM contato";
      $query = mysqli_query($conexao, $sql);

    ?>
    <!-- Main content -->
    <div class="content">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Assunto</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>

          <?php 

          while($contatos = mysqli_fetch_assoc($query)){

 
          ?>
          <tr>
            <td><?php echo $contatos['id']?></td>
            <td><?php echo $contatos['nome']?></td>
            <td> <?php echo $contatos['assunto']?></td>
            <td><a href='' data-toggle='modal' data-target='#exampleModal' data-id='<?php echo $contatos['id'];?>' data-nome='<?php echo $contatos['nome'];?>' data-email='<?php echo $contatos['email'];?>' data-assunto='<?php echo $contatos['assunto'];?>' data-tel='<?php echo $contatos['tel'];?>' data-mensagem='<?php echo $contatos['mensagem'];?>'><i class='fa fa-eye'></i></a></i></td>

          </tr>

          <?php
            }
          ?>
        </tbody>
      </table>

    </div>
</div>
<!-- ./wrapper -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Contato</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="cadMenu.php?acao=u">
      <fieldset>
      <div class="form-group">
        <input style="width: 50px" readonly type="text" class="form-control" id="id" name="id">
      </div>
       <div class="form-group">
        <label for="nome">None</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
       <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text" class="form-control" id="tel" name="tel">
      </div>
       <div class="form-group">
        <label for="assunto">Mensagem</label>
        <textarea class="form-control" rows="6" id="mensagem" name="mensagem"></textarea>
      </div>
      </fieldset>
        <div class="modal-footer">
          <a href="?page=menu&acao=u" class="btn btn-danger" data-dismiss="modal">Fechar</a>
      </div>
    </form>
      </div>
    
    </div>
  </div>
</div>

<script type="text/javascript">
  
 $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipientId = button.data('id')
  var recipientNome = button.data('nome')
  var recipientEmail = button.data('email')
  var recipientTel = button.data('tel')
  var recipientMensagem = button.data('mensagem')
  var modal = $(this)

  modal.find('#id').val(recipientId)
  modal.find('#nome').val(recipientNome)
  modal.find('#email').val(recipientEmail)
  modal.find('#tel').val(recipientTel)
  modal.find('#mensagem').val(recipientMensagem)

})
</script>
