const im = document.getElementById("imie");
let ha = document.getElementById("haslo");

im.addEventListener("input", wyswietl)
ha.addEventListener("input", wyswietlHaslo)

function wyswietl(){
    let nasze_imie = document.getElementById("imie").value;
    document.getElementById("wynik").innerText = nasze_imie;
}

function wyswietlHaslo(){

    let nasze_haslo = document.getElementById("haslo").value.length; //pobiera ilość znaków

    if(nasze_haslo < 6 )
        {
            let wielkosc = "33px";

        document.getElementById("haslo").style.backgroundColor = "red";
        document.getElementById("haslo").style.fontSize = wielkosc;
        }
        else
            {
               let wielkosc1 = nasze_haslo + "px";
               document.getElementById("haslo").style.backgroundColor = "lightgreen";
               document.getElementById("haslo").style.fontSize = wielkosc1; 
            }   


}
