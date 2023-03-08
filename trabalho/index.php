<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E_Ferias</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!--p>Preçomized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">E_Férias</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Meus Destinos</h1>
                            <p class="lead text-white-50 mb-4">O E_Férias que todos desejam salvar</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="adicionar.php">Adicione</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    
                
                
                <!--   TESTE DIRETO  

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/Hawaii.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                <br>
                                <h4 class="mb-3">Hawaii</h4>
                                <p>Descrição: Praia do Hawaii
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$3.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/londres.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <br>
                                <h4 class="mb-3">Londres</h4>
                                <p>Descrição: Cidade de Londres
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$5.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/Lisboa.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <br>
                                <h4 class="mb-3">Lisboa</h4>
                                <p>Descrição: Cidade de Lisboa
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$1.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/dubai.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <br>
                                <h4 class="mb-3">Dubai</h4>
                                <p>Descrição: Cidade de Dubai
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$10.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/bento.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <br>
                                <h4 class="mb-3">Bento Gonçalves</h4>
                                <p>Descrição: Cidade de Bento Gonçalves
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$8.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="assets/imagem/saoborja.jpg" alt="">
                            <div class="position-relative p-4 pt-0">
                                <br>
                                <h4 class="mb-3">São Borja</h4>
                                <p>Descrição: Cidade de São Borja
                                </p>
                                <p>Data: 2022-09-12 até 2023-02-28</p>
                                <p>Preço: R$12.999,90</p>
                                <a class="small fw-medium" href=""><a href='altera_jogador.php?indice=$id'>Alterar</a> |
                                <a href='excluir_jogador.php?indice=$id'>Excluir</a></a>
                            </div>
                        </div>
                    </div>
 -->
                    

                    <?php
               
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                        try {
                            $mysqli = new mysqli("localhost", "id19323740_root", "89B}7MqH0K$=NVfy", "id19323740_ferias");
                            $mysqli->set_charset("utf8");
    //------------------------------------------------------------------------------
    
                            //Faz a consulta SQL
                            $time = $mysqli->query("SELECT * FROM locais");
                            //Percorre os times
                               while ($resultado = $time->fetch_array()) {
                                   //Busca os valores de cada registro
                                   $id = $resultado["id"];
                                   $descricao = $resultado["descricao"];
                                   $nome = $resultado["nome"];
                                   $preco = $resultado["preco"];
                                   $imagem = $resultado["imagem"];
                                   $data_inicio = $resultado["data_inicio"];
                                   $data_fim = $resultado["data_fim"];
                                   
    
                            echo "                    
                        <div class='col-md-6 col-lg-4 wow fadeInUp' data-wow-delay='0.5s'>
                            <div class='service-item rounded overflow-hidden'>
                                <img class='img-fluid' src='$imagem' alt=''>
                                <div class='position-relative p-4 pt-0'>
                                    <br>
                                    <h4 class='mb-3'>$nome</h4>
                                    <p>Descrição: $descricao
                                    </p>
                                    <p>Data: $data_inicio até $data_fim</p>
                                    <p>Preço: R$$preco,90</p>
                                    <a class='small fw-medium' href=''><a href='alterar.php?indice=$id'>Alterar</a> |
                                <a href='excluir.php?indice=$id'>Excluir</a></a>
                                </div>
                            </div>
                        </div>";}
                        
                            $time->free();
                                    $mysqli->close();
                                } catch (Exception $e) {
                                    exit("Erro ao conectar ao banco de dados: " . $e->getMessage());
                                }
                            ?>  </div>               




                </div>
            </div>
        </div>
        <!-- Service End -->
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; E_Férias 2022</p></div>
        </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
