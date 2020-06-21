let checkbox1 = document.getElementById('form__checkbox1');
let checkbox2 = document.getElementById('form__checkbox2');
let birth_id = "form__birth"

function check() {
    if(checkbox1.checked == true) {
        if(checkbox2.checked == true) checkbox2.checked = false;
        document.getElementById(birth_id).style.display = "block";
        setTimeout(() => document.getElementById(birth_id).style.opacity = 1, 0)
    }
    else if(checkbox1.checked != true || checkbox2.checked == true || checkbox2.checked != true) {
        document.getElementById(birth_id).style.display = "none";
        setTimeout(() => document.getElementById(birth_id).style.opacity = 0, 0)
    }
}

