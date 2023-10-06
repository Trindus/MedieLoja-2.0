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

                    echo "<div class=botoesCard>";
                        echo "<a href=alterar.php?cod=$item[cod]><img src=img/alterar.png alt=Alterar title=alterar></a>";
                        echo "<a href=javascript:excluir($item[cod])><img src=img/excluir.png alt=excluir title=excluir></a>";
                    echo "</div>";
                echo "</div>";
            }
        echo "</div>";
    ?>




<script src="app.js"></script>
    <script>
        function excluir(cod){
            opcao = confirm("Deseja excluir o registro " + cod + "?");
            console.log(opcao);
            if(opcao == true){
                $.ajax({
                    type: "get",
                    url: "excluir.php?cod="+cod,
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        }
    </script>



</body>
</html>