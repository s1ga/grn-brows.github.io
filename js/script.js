let checkbox1 = document.getElementById('form__checkbox1');
let checkbox2 = document.getElementById('form__checkbox2');

function check() {
    if(checkbox1.checked == true)
        document.getElementById('form__birth').style.display = "block";
    else if(checkbox1.checked != true || checkbox2.checked == true || checkbox2.checked != true) 
        document.getElementById('form__birth').style.display = "none";
}