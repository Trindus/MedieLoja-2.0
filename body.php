<?php    
    include('menu.php');
    include('nav.php');        
    ?>
<body>
    <?php
        include('connect.php');
        $itens  = mysqli_query($con, "Select * from `tb_itens`");
        echo "<div class=cards>";
            while($item = mysqli_fetch_array($itens)){
                echo "<div class=ftItem>";
                    echo "<div>";
                        if($item['foto'] != ""){
                            echo "<img src=$item[foto]>";
                        }else{
                            echo "<img src=img/ftItem.png>";
                        }
                    echo "</div>";

                    echo "<p>$item[cod]</p>";
                    echo "<p>$item[nome]</p>";
                    echo "<p>$item[tipo]</p>";
                    echo "<p>R$ $item[preco]</p>";

                echo "</div>";
            }
        echo "</div>";
    ?>

</body>
</html>