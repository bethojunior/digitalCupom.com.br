<!DOCTYPE HTML>
<html>
<head>
    <title>Cupom Digital</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body onload="loadData()">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img src="images/logo.svg" alt="" /></span>
        <h1>Seja Bem Vindo</h1>
        <p id='nameLoged'></p>
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
                                <th>TIPO</th>
                            </tr>
                            </thead>
                            <tbody id='loadList'>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="4u$ 12u$(small)">
                    <header class="major">
                        <h2>Informações do Usuario</h2>
                    </header>
                    <h2 style="text-align: center; font-weight: bold" id='nameLoged2'></h2>
                    <ul class="alt">
                        <li><b>CPF:</b><label id='cpfClienteloged'></label></li>
                        <li><b>E-mail</b><label id='emailLoged'></label></li>
                        <li><b>Telefone:</b><label id='numberLoged'></label></li>
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
<script src="assets/js/main.js"></script>
<script src="assets/js/util.js"></script>
<script src="webFiles/js/ultils/sweetalert.min.js"></script>
<script src="webFiles/js/ultils/host.js"></script>
<script src="webFiles/js/controller/userController.js"></script>
<script src="webFiles/js/modulos/user.js"></script>
<script src="webFiles/js/modulos/profile.js"></script>


</body>
</html>