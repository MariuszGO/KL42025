const im = document.getElementById("imie");

im.addEventListener("input", wyswietl)


function wyswietl(){
    let nasze_imie = document.getElementById("imie").value;

    document.getElementById("wynik").innerText = nasze_imie;
}
