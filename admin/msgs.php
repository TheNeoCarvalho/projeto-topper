  <style>
    .pull-left {
      float: left;
      padding: 10px 10px 0 10px;
    }
    .lista { border-bottom: 1px solid #EEE }
    .lista span { padding: 5px 0 0 5px; }
    .lista p { padding: 0 0 0 40px; font-size: 12px; color: #069 }
     </style>
<?php 

require "config.php";
                
$sqlM = "SELECT * FROM notificacoes, contato WHERE contato.id = notificacoes.idContato AND notificacoes.status = 0";
$notifys = mysqli_query($conexao, $sqlM);

while($notifyUser = mysqli_fetch_assoc($notifys)){

  echo '
  <li class="lista"><!-- start message -->
    <a href="#">
      <div class="pull-left">
       <i class="fa fa-envelope" aria-hidden="true"></i>
      </div>
      <span>'. $notifyUser['nome'].'</span>
      <p>'. $notifyUser['email'].'</p>
    </a>
  </li>
  ';  
} ?>