<?php

    session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "vemsegura";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
        die("A conexão com o BD falhou: " . mysqli_connect_error());
        }

    $nome = $_SESSION["nome"];
        
    if ($nome != null){
            $nome = $_SESSION["nome"];;
        }
        $sql = "SELECT * FROM tb_cadastros INNER JOIN tb_denuncia ON tb_cadastros.id_cadastro = tb_denuncia.id_cadastro WHERE tb_denuncia.nome = '$nome'";
        $result = $conn->query($sql);

    include('include/headerForm.php');
?>


    <section class="form-denuncia">
        <h1 class="title">Cadastro</h1>

        <div class="container">

            <?php

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<br><b>Nome:</b> ". $row["nome"]. "<br><b>Localização:</b> ". $row["localizacao"]. "<br><b>Vagão:</b> ". $row["vagao"]. "<br><b>Descrição:</b> ". $row["descricao"]."<br><b>Fotos:</b> ". $row["arquivo"]."<br>" . "<img src='./arquivos/".$row["arquivo"]." ' width='300px'/> ";
                    }
                } else {
                    echo "0 results";
                }

            ?>
            <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="logout.php" class="btn btn-info">Nova Consulta</a>
                </div>
            </div>
            </div>
        </div>
    </section>

<?php include("include/footer.php")?>