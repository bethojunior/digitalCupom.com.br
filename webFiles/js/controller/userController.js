class UserController{



    authenticate(tel , cpf , callback){
        $.ajax({
            url: "http://betho3.000webhostapp.com/index/authenticate",
            method: "GET",
            data: {"tel" : tel , "cpf" : cpf},
            success:function(result){
                console.log(result);
                callback(JSON.parse(result));
            },error:function(result){
                console.log(result);
            }
        });
    }

    getCupons(cpf , callback){
        $.ajax({
            url: "http://betho3.000webhostapp.com/index/GetCupons",
            method: "POST",
            data: {"cpf" : cpf},
            success:function(result){
                callback(JSON.parse(result));
            },error:function(result){
                console.log(result);
            }
        });
    }
    
    

}