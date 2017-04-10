<hr>
<section class = "table-responsive">
    <?php
    
    use App\Controller\HomeController;
    
    $nome = 'Rodrigo';
    $email = 'rodrigo@gmail.com';
    
//    include_once '../../Controller/HomeController.php';
    
    $controller = new HomeController;
    
    $controller->salvar($nome, $email);
    ?>
    
    
    <?php include "home/grid.php"; ?>
</section>
