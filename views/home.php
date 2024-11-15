<?php
    if(!isset($_SESSION['usuario'])){
        header("location:login");
        exit();
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center bg-card">
        <div class="col-10 text-center mt-3">
            <h2>Inicio</h2>
        </div>
      
    </div>
</div>


