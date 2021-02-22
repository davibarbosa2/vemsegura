<?php
    require_once('include/conexao.php');

    if (isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem'])) {
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $sql = "insert into tb_contato (email, assunto, mensagem) values ('$email', '$assunto', '$mensagem')";
        $result = $conn->query($sql);
    }

    include ('include/header.php');
?>

        <!--HEADER CAROUSEL-->

        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="banner1" class="d-block w-100 img-fluid" src="img/sentada-mulher.jpg" alt="mulher de costas sentada no onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Diminuir os casos de assédio no transporte</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="img/pagamento-mulher.jpg" alt="mulher entrando no onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Aumentar o índice de denúncias</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="img/ponto-mulher.jpg" alt="mulher esperando onibus">
                        <div class="carousel-caption  d-md-block">
                            <h2>Vem Segura</h2>
                            <p>Oferecer informação e conscientização</p>
                            <p>Essa é a nossa missão</p>
                            <a href="#about-area" class="main-btn">Saiba Mais </a>
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--INFO VEM SEGURA-->

            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">CONHEÇA O VEM SEGURA</h3>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="img/mobilidade-site.jpg" alt="mulher em frente ao metro">
                        </div>

                        <div class="col-md-6">
                            <h3 class="about-title">A solução pensada para as mulheres</h3>
                            <p>Vem Segura é uma plataforma que visa combater e prevenir os casos de assédio contra as mulheres no transporte público na cidade do Rio de Janeiro.</p>
                            <p>O Vem Segura não é uma mera plataforma de denúncias,seu propósito vai muito além disso. Queremos além de possiblitar a realização da denúncia,servir como uma fonte de informações e conscientização para todos os usuários do transporte público.</p>

                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Comunicação direta com a equipe de segurança</li>
                                <li><i class="fas fa-check"></i> Qualquer pessoa pode fazer a denúncia</li>
                                <li><i class="fas fa-check"></i> Plataforma amigável</li>
                                <li><i class="fas fa-check"></i> Ajuda rápida de forma segura</li>
                                <li><i class="fas fa-check"></i> Instruções de como proceder em uma situação de assédio</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <!--Serviços Vem Segura-->

            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Principais crimes contra as mulheres</h3>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Importunação Sexual</h4>
                            <p>Qualquer ato libidinoso sem o consentimento da vítima.</p>
                            <p>Dentro do transporte público (ônibus, trem, metro), uma pessoa fica se masturbando ou mesmo tenta
                                esfregar o órgão genital na vítima.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Assédio Sexual</h4>
                            <p>Ato libidinoso sem o consentimento da vítima, com relação de hierarquia.</p>
                            <p>O dono de uma empresa aborda sua secretária, oferecendo um cargo e salário melhor do que ela
                                possui, em troca de relações sexuais com ele.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-female"></i>
                            <h4>Estupro</h4>
                            <p>Constranger alguém, mediante violência ou grave ameaça, para obter conjunção carnal.</p>
                            <p>Uma pessoa conhecida ou desconhecida, que lhe ameaça de morte ou agride fisicamente, para ter a
                                força uma relação sexual.</p>
                        </div>

                        <div class="col-12">
                            <h3 class="main-title">Leis e Artigos</h3>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Importunação Sexual</h4>
                            <p>Enquadrado como crime pela Lei n°13.718/2018 — pena pode variar entre 1 e 5 anos, sendo aumentada em caso de
                                agravantes.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Assédio Sexual</h4>
                            <p>Enquadrado como crime pelo artigo 216 do Código Penal — pena pode variar entre 1 e 2 anos e prisão.</p>
                        </div>

                        <div class="col-md-4 service-box">
                            <i class="fas fa-balance-scale"></i>
                            <h4>Estupro</h4>
                            <p>Enquadrado como crime hediondo pelo artigo 213 do Código Penal — pena pode variar de 6 a 10 anos de reclusão para o criminoso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Estatisticas da violência contra a mulher-->

            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>97% das mulheres já sofreram assédio no transporte.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>A cada 16 horas é registrado um caso de assédio a mulheres em algum transporte do Rio de Janeiro.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>35% foi no transporte.<br>O local com maior número de denúncias registradas de assédio é no transporte público.</p>

                        </div>

                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>46% das mulheres não se sentem confiantes para usar meios de transporte sem sofrer assédio sexual.</p>
                        </div>
                    </div>
                </div>
            </div>



            <!--TIME-->
            <div id="time-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/eu-site.jpg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Davi Barbosa</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/aline.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Aline Cardoso</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/douglas.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Douglas Batista</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/carol.jpeg" class="card-img-top" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Carol Silveira</h5>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/gustavo.jpeg" class="card-img-top img-fluid" alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Gustavo Lopes</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/thamiris.jpeg" class="card-img-top " alt="eu na foto">
                                <div class="card-body">
                                    <h5 class="card-title">Thamiris Silva</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Saiba Mais-->

            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 apply-box" id="pattern-img">
                            <h4>Quer ajudar nessa missão?</h4>
                            <p>O Vem Segura é uma solução sem fins lucrativos, baseada na colaboração de todos os usuários e patrocinadores.</p>

                            <p>Quer saber como ajudar na nossa causa?</p>
                            <a href="#contact-area" class="main-btn" id="apply-btn">Contate-nos</a>
                        </div>

                    </div>
                </div>
            </div>



            <!--CONTATO RAPIDO-->

            <?php include("novidades.php") ?>

            <!--CHAMADA PARA AÇÃO DO USUÁRIO-->

            <!--
            <div id="call-area">
                <div class="container">
                    <div class="row">
                        <p>Contacte-nos para contribuir com essa causa!</p>
                        <button class="main-btn" id="call-btn">contato</button>
                    </div>
                </div>
            </div>
            -->
        </div>

    </main>

    <footer>
        <!--FOOTER-->

        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-title">Ligue para : </span> (21)9999-9999</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-title">E-mail : </span> vemsegura@gmail.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt "></i>
                        <p><span class="contact-title">Endereço : </span><br> R. dos Inválidos, 212 - 10º andar - Centro, Lapa - RJ, 20231-046</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem : </p>
                    </div>
                    <div class="col-md-6">
                        <form method="post" id="contact-form" action="/vemsegura/index.php">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                            <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="mensagem"></textarea>
                            <input type="submit" value="Enviar" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include('include/footer.php')?>