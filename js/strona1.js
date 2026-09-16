let zmienna = 500;
let zmienna2 = "JAN";
let zmienna3 = true;
let a = false;
//alert("Witaj Świecie " + zmienna2);

function zmien_tytul(){

    console.log("Zmienna a ma wartość: " + a); //console.log  do testów

    if( a == false){
        document.getElementById("tytul").innerHTML = "Dzień dobry " + zmienna2;
        a = true;
    }else
    {
        document.getElementById("tytul").innerHTML = "Witaj " + zmienna2 + " " + zmienna;
        a = false;
    }

   //to jest to samo : 
   //let tyt = document.getElementById("tytul");
   //tyt.innerHTML = "Dzień dobry " + zmienna2;
}
