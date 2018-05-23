<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Cupom Digital</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img src="images/logo.svg" alt="" /></span>
        <h1>Seja Bem Vindo</h1>
        <p>Heghbertho Costa</p>
    </header>


    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="" class="main">
            <div class="row uniform">
                <div class="8u 12u$(small)">
                    <header class="major">
                        <h2>Visualizador de Notas</h2>
                    </header>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                            <tr>
                                <th>Data</th>
                                <th>Estabelecimento</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 8; $i++){ ?>
                                    <tr onclick="ir()">
                                        <td>01/02/2018</td>
                                        <td>Lojas Americanas</td>
                                        <td>R$ 29,99</td>
                                        <td> <a href="#" class="icon fa fa-trash-o"><span class="label">Dribbble</span></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="4u$ 12u$(small)">
                    <header class="major">
                        <h2>Informações do Usuario</h2>
                    </header>
                    <h2 style="text-align: center; font-weight: bold">Heghbertho Costa</h2>
                    <ul class="alt">
                        <li><b>CPF:</b> 3839387387</li>
                        <li><b>Endereço:</b> Rua santa Luiza 201</li>
                        <li><b>CEP:</b> 324231201 - Fortaleza - CE</li>
                        <li><b>E-mail</b>costa@gmail.com</li>
                        <li><b>Telefone:</b>(85) 9785857474</li>
                        <ul class="actions">
                            <li><a href="#" class="button special small">Sair</a></li>
                        </ul>
                    </ul>

                </div>
            </div>
        </section>

    </div>
    <footer id="footer">
        <section>
            <h2>CupomDigital.com.br</h2>
            <p>
                O cumpo digital é um projeto direncionandoa curso de ADS, turma noite da faculdade FAMETRO-CE, vinculado ao projeto
                intregrador do professor Leornando Jose Todos os direitos reservados ao grupo de aluno envolvidos.
            </p>
            <ul class="actions">
                <li><a href="sobre.php" class="button">Ler Mais</a></li>
            </ul>
        </section>
        <section>
            <h2>Disponivel Para</h2>
            <img src="images/android.svg" style="width: 202px; height: 60px;"><br>
            <img src="images/ios.svg"  style="width: 202px; height: 60px;;">
        </section>
        <p class="copyright">&copy; CupomDigital.com.br</p>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script>
    function ir() {
        window.location.href = "visualizadorNF.php";
    }
</script>

</body>
</html>