<?php
    require_once ("include/config.php");

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: resultado_consulta.php");
        exit;
    }
 
    $nome = $senha = "";
    $nome_err = $senha_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["nome"]))){
            $nome_err = "Digite seu Nome.";
        } else{
            $nome = trim($_POST["nome"]);
        }

        if(empty(trim($_POST["senha"]))){
            $senha_err = "Digite sua senha.";
        } else{
            $senha = trim($_POST["senha"]);
        }

        if(empty($nome_err) && empty($senha_err)){
            $sql = "SELECT id_cadastro, nome, senha FROM tb_cadastros WHERE nome = ? and senha = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ss", $param_nome, $param_senha);
                $param_nome = $nome;
                $param_senha = $senha;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){

                        mysqli_stmt_bind_result($stmt, $id, $nome, $senha);
                        session_start();

                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["nome"] = $nome;

                        header("location: resultado_consulta.php");
                    } else{
                        $nome_err = "Nome ou senha digitados INCORRETAMENTE.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }

    include('include/headerForm.php');
?>

    <section class="form-denuncia">
        <h1 class="title">Consulte aqui sua denúncia</h1>
        <div class="contact-form row">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-field col-lg-6 <?php echo (!empty($nome_err)) ? 'has-error' : ''; ?>">
                    <label for="name" class="label">Nome</label>
                    <input type="text" name="nome" class="input-text" value="<?php echo $nome; ?>">
                    <!-- <span class="help-block"><?php echo $nome_err; ?></span> -->
                </div>
                <div class="form-field col-lg-6 <?php echo (!empty($senha_err)) ? 'has-error' : ''; ?>">
                    <label for="senha" class="label">Senha</label>
                    <input type="password" name="senha" class="input-text">
                    <!-- <span class="help-block"><?php echo $senha_err; ?></span> -->
                </div>
                <div class="form-field col-lg-6">
                    <span class="help-block"><?php echo $nome_err; ?></span>
                    <span class="help-block"><?php echo $senha_err; ?></span>
                </div>
                <div class="form-field col-lg-6">
                    <input type="submit" class="btn btn-primary" value="Consultar">

                </div>
            </form>
        </div>
    </section>

<?php include('include/footerForm.php')?>