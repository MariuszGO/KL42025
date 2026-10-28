
let kraje = ["Polska", "Niemcy", "Francja", "Włochy"];



function wyswietlKraje() {
    let lista = document.getElementById("lista");
    lista.innerHTML = "";

    for (let kraj of kraje) {
        let element = document.createElement("li");
        element.textContent = kraj;
        lista.appendChild(element);
    }
}
wyswietlKraje();


document.getElementById("formularz").addEventListener("submit", function(event) {
    event.preventDefault();

    let nowyKraj = document.getElementById("kraj").value.trim();

    if (nowyKraj !== "") {
        kraje.push(nowyKraj);
        wyswietlKraje();
        document.getElementById("formularz").reset();
    }
});


