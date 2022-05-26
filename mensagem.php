<?php 
session_start(); // ABRIR A SESSÃO
if(isset($_SESSION['mensagem'])): ?>
 
   <script>
    window.onload = function () {   // APARECE A MENSAGEM DA SESSION
        M.toast({html: '<?php echo $_SESSION['mensagem'];?>'}) 
      }
    </script>
    <?php
endif;
session_unset(); // LIMPA A MENSAGEM DA SESSÃO START

  