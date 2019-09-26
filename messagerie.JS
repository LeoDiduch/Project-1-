const message = document.getElementById("discussion");

document.addEventListener('keydown', (event) => {
    if (event.keyCode === 13) {
        event.preventDefault();
        const msg = document.getElementById("textMessagerie").value;
        appendMessage(msg);
        appendReponse(msg);
        document.getElementById('textMessagerie').value = null;
    }
})


const appendMessage = msg => {

    const bulle = document.createElement("span");
    bulle.innerHTML = `<span class="envoi">${msg}</span>`;

    message.appendChild(bulle);
};

const appendReponse = msg => {
    let reponse
    if (msg === 'bonjour') {
        reponse = 'bonjour';
    } else if (msg === 'as tu des hobbies ?') {
        reponse = 'oui, j adore regarder tchoupi';
    } else if (msg === 'quel âge as tu ?') {
        reponse = 'j ai 42 ans';
    } else {
        reponse = 'je ne comprends pas votre question';
    }

    const bulle = document.createElement("span");
    bulle.innerHTML = `<span class="reçu">${reponse}</span>`;

    message.appendChild(bulle);
}





