let formValid = document.getElementById('buttonSend');
let pseudo = document.getElementById('pseudo');
let missPseudo = document.getElementById('missPseudo');

formValid.addEventListener('click', validation);

function validation(event)
{
    if(pseudo.validity.valueMissing) {
        event.preventDefault();
        missPseudo.textContent = "Oups! Pseudo manquant";
        missPseudo.style.color = 'red';

    }

}