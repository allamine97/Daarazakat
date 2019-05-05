var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("navbara").style.display = "block";
    document.getElementById("conteneur").style.display = "block";
    document.getElementById('corps').style.display = "block";
    document.getElementById('incident').style.display = "block";
    document.getElementById('myFooter').style.display = "block";

}
