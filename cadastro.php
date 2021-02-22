<?php
    require_once('include/conexao.php');

    if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha']) ) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "insert into tb_cadastros (nome, cpf, endereco, telefone, email, senha) values ('$nome', '$cpf', '$endereco', '$telefone', '$email', '$senha')";
        $result = $conn->query($sql);
    }

    include('include/headerForm.php');
?>


    <section class="form-denuncia">
        <h1 class="title">Cadastro</h1>

        <div class="container">
            <form action="./cadastro.php" method="POST">
                <div class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="nome" name="nome" required>
                        <label for="name" class="label">Nome</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="cpf" name="cpf" required>
                        <label for="cpf" class="label">CPF</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="endereco" name="endereco">
                        <label for="endereco" class="label">Endereço</label>
                    </div>


                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="telefone" name="telefone" required>
                        <label for="descricao" class="label">Telefone</label>
                    </div>

                    <div class="form-field col-lg-12">
                        <input type="text" class="input-text" id="email" name="email" required>
                        <label for="email" class="label">Email</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="password" class="input-text" id="senha" name="senha" required>
                        <label for="senha" class="label">Senha</label>
                    </div>
                    <!-- Este botão abaixo é para confirmar senha ( PRECISA TERMINAR )-->
                    <div class="form-field col-lg-6">
                        <input type="password" class="input-text" id="senha" required>
                        <label for="senha" class="label">Confirmar Senha</label>
                    </div>

                    <div class="form-field col-lg-12">
                        <input type="submit" value="enviar" class="submit-btn" name="enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php include('include/footerForm.php')?>