<!DOCTYPE HTML>
<html>
<head>
    <title>Cupom Digital</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

<div id="wrapper">

    <header id="header" class="alt">
        <span class="logo"><img src="images/logo.png" alt="" /></span>
        <h1>Login</h1>
        <form method="post" action="authenticate.php">
            <div class="row uniform">
                <div class="3u 12u$(xsmall)"> </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type='text' name="tel" id="tel" value="" placeholder="Seu telefone - Apenas numeros com ddd" />
                </div>
            </div>
            <div class="row uniform">
                <div class="3u 12u$(xsmall)"> </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="cpf" id="cpf" value="" placeholder="Seu CPF" />
                </div>
            </div>
            <div class="row uniform">
                <div class="3u 12u$(xsmall)"> </div>
                <div class="6u$ 12u$(xsmall)">
                    <ul class="actions">
                        <li><a onclick='logar()' class="button special">Entrar</a></li>
                        <li><a class="button">Limpar</a></li>
                    </ul>

                </div>
            </div>
        </form>
    </header>


</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="webFiles/js/ultils/sweetalert.min.js"></script>
<script src="webFiles/js/ultils/host.js"></script>
<script src="webFiles/js/ultils/Connect.js"></script>
<script src="assets/js/main.js"></script>
<script src="webFiles/js/controller/userController.js"></script>
<script src="webFiles/js/modulos/user.js"></script>



</body>
</html>