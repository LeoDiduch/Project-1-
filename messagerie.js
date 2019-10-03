//message buble generation

const message = document.getElementById("discussion");

document.addEventListener('keydown', (event) => {
    if (event.keyCode === 13) {
        event.preventDefault();
        const msg = document.getElementById("textMessagerie").value;
        appendMessage(msg);
        afficherNomEnvoi('You');
        setTimeout(appendReponse, 1000, msg);
        setTimeout(afficherNomReponse, 1000, 'patrick');
        document.getElementById('textMessagerie').value = null;
    }
})

const afficherNomEnvoi = (name) => {
    const bulle = document.createElement("div");
    bulle.innerHTML = `<span class="nameEnvoi">${name}</span>`;

    message.appendChild(bulle)
}

const afficherNomReponse = (name) => {
    const bulle = document.createElement("div");
    bulle.innerHTML = `<span class="nameReponse">${name}</span>`;

    message.appendChild(bulle)
}

const appendMessage = msg => {

    const bulle = document.createElement("span");
    bulle.innerHTML = `<span class="envoi">${msg}</span>`;

    message.appendChild(bulle);
};



const appendReponse = msg => {
    let reponse
    let sierpinski
    if (msg === 'bonjour') {
        reponse = 'bonjour';
    } else if (msg.includes('hobbies') ) {
        reponse = 'oui, j adore regarder tchoupi';
    } else if (msg === 'quel âge avez vous ?') {
        reponse = 'j ai 42 ans';
    } else {
        reponse = 'je ne comprends pas votre question';
    }

    const bulle = document.createElement("span");
    bulle.innerHTML = `<span class="reçu">${reponse}</span>`;

    message.appendChild(bulle);}


//function emote page

    const pageEmote = document.getElementById('containerEmote');
    const page = document.createElement("div");
    page.setAttribute('id', 'pageEmoji');
    const table = document.createElement("table");

    const itemPerLine = 5;
    let startID = 600;
    const numberLigne = 20;

    let createLine = () => {
        return line = document.createElement('tr');
    };


    let fullfillLine = (itemPerLine, startID) => {

        for (i=0; i < itemPerLine; i++) {
            const ligne = createLine()
            const item = document.createElement('th');
            item.innerHTML = `&#x1F${startID}<div id="x1F${startID}"></div>`;
            startID++;

            ligne.appendChild(item);
        } 
    };



    for (let i = 0; i < numberLigne; i++) {
        const ligne = fullfillLine(itemPerLine, startID);
        startID += 5;
        table.appendChild(ligne);
    }

    page.appendChild(table);
    pageEmote.appendChild(page);


//function open pageEmote close page Emote

const listeEmoji = document.getElementById('pageEmote');

listeEmoji.addEventListener('click', () => {
    pageEmoji.style.display = (pageEmoji.style.display === 'block') ? 'none' : 'block';
});


