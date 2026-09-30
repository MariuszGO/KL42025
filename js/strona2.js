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
        document.getElementById("haslo").style.backgroundColor = "lightred";
        }
        else
            {
               document.getElementById("haslo").style.backgroundColor = "lightgreen"; 
            }   


}
