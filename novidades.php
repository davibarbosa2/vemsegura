<?php
    require_once ('include/conexao.php');

    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $sql = "insert into tb_novidades (email) values ('$email')";
        $result = $conn->query($sql);
    }

    include ('include/header.php');
?>

<body>
    <div id="news-area">
        <div class="container">
            <div class="col-md-12">
                <h3 class="main-title">Novidades do Vem Segura</h3>
            </div>
            <p>Digite seu e-mail abaixo para ficar por dentro de todas as novidades do Vem Segura</p>
            <form method="POST" action="">
                <input type="email" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
                <input type="submit" value="Enviar" id="news-btn">
            </form>
        </div>
    </div>

<?php include('include/footer.php')?>