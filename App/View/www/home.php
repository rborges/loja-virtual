<hr>
<section class = "table-responsive">
    <?php
    
    use App\Controller\HomeController;
    
    $nome = 'Rodrigo7';
    $email = 'rodrigo7@gmail.com';
    
//    include_once '../../Controller/HomeController.php';
    
    $controller = new HomeController;
    
    $controller->salvar($nome, $email);
    ?>
    
    
    <?php include "home/grid.php"; ?>
</section>
