  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cadastro Categoria</small>
      </h1>
    </section>


    <div class="content">
      <div class="row">
        <div class="col-md-12">

  <div>
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
         <label for="nome">SKU</label>
        <input style="width: 80px" readonly type="text" class="form-control" id="id" name="id" value="<?php echo strtolower(substr(md5(microtime()), -6));?>">
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
        </div>
      </div>
</div>
<!-- ./wrapper -->