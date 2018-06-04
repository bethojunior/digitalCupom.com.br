var data = localStorage.getItem("usuario");

function loadData(){


    let profile = JSON.parse(localStorage.getItem("usuario"));
    console.log(profile);
    document.getElementById("cpfClienteloged").innerText = profile[0]['CPF'];
    document.getElementById("numberLoged").innerHTML = profile[0]['tel'];
    document.getElementById("emailLoged").innerHTML = profile[0]['email'];
    document.getElementById("nameLoged").innerHTML = profile[0]['nome'].toUpperCase();
    document.getElementById("nameLoged2").innerHTML = profile[0]['nome'].toUpperCase();


    new UserController().getCupons(profile[0]['CPF'] , function(response){
        
        let txt = " ";
        let data = response;

        for(let i in data){
        
            txt += `
            
                <tr>
                    <td>${data[i]['dataNow']}</td>
                    <td>${data[i]['loja']}</td>
                    <td>${data[i]['tipo']}</td>
                    <td><a href="http://betho3.000webhostapp.com/files/cupons/${data[i]['arquivo']}" class="icon fa fa-clone"><span class="label">Dribbble</span></a></td>
                    <td value='${data[i]['id']}' class='apagar'>X</td>
                </tr>
        
            `;
        }

        document.getElementById("loadList").innerHTML = txt;
        
        for(let i in document.getElementsByClassName('apagar')){
            document.getElementsByClassName("apagar")[i].onclick = function(){
                alert(this.value);
            }
        }

    });
}