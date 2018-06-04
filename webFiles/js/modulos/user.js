function logar(){

    let tel = document.getElementById("tel").value;
    let cpf = document.getElementById("cpf").value;

    new UserController().authenticate(tel , cpf , function(response){
        if(response != false){
            localStorage.setItem("usuario", JSON.stringify(response));
            window.location.href = "visualizadorNotas.php";
        }else {
            swal("ops.." , "USUÁRIO OU SENHA INVÁLIDOS" , "info");
        }
    });

}