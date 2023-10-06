<?php 
    include('menu.php');
    include('nav.php');
    ?>
<body>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);    
        }
    ?>
    <div class="corpo">
        <div class="form">
            <form action="addItem.act.php" method="post" enctype="multipart/form-data">
                <p>Nome do item:</p>
                <input type="text" name="nome" id="nome">
                <p>Preço:</p>
                <input type="text" name="preco" id="preco">
                <p>Tipo:</p>
                <input type="text" name="tipo" id="tipo">
                <p id="idfoto">Foto: <label for="foto">Escolher Foto</label></p>
                <p><input type="file" name="foto" id="foto"></p>


                <div class="enviar">
                    <input type="submit" value="Enviar">
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>