var MyChislo = 0;
var ExitLogin = 0;

function ChangeText(){
    document.body.innerHTML = document.body.innerHTML.replace(/НЕУСПЕШНО/g, 'УСПЕШНО');
    MyChislo = 1;
    //setTimeout(ChangeText2, 3000);
}

function Changer()
{
    if(MyChislo == 0 && ExitLogin == 0)
    {
        setTimeout(ChangeText, 1);
    }
}

function alerted(){
    var input_val = document.querySelector('input').value;
    if(input_val == "bd438"){
        alert("Пароль верный")
        Changer();
    }
}