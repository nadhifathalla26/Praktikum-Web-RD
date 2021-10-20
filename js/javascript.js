function getTheme(){
    var theme = document.getElementById("theme").value;
    if (theme == "white"){
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
    }
    else if (theme == "black") {
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
    }
}

function getPlanet(){
    var planet = document.getElementById("planet").value;
    if (planet == "m"){
        document.getElementById("sentence1").innerHTML = "Merkurius adalah planet terkecil dalam sistem tata surya."
    }
    else if (planet == "j"){
        document.getElementById("sentence1").innerHTML = "Jupiter adalah planet terbesar dalam sistem tata surya."
    }
    else if (planet == "b"){
        document.getElementById("sentence1").innerHTML = "Bumi adalah satu-satunya planet yang dihuni oleh manusia dalam sistem tata surya."
    }
    else if (planet == "s"){
        document.getElementById("sentence1").innerHTML = "Saturnus adalah planet yang memiliki cincin berukuran besar dalam sistem tata surya."
    }
    else if (planet == "p"){
        document.getElementById("sentence1").innerHTML = "Pluto bukan lagi dianggap sebagai planet dalam sistem tata surya."
    }
}

function getFactorial(){
    var num = document.getElementById("factorial").value;
    var result = 1;
    var factor = 0;
    for (factor = num; factor >= 1; factor--){
        result = result * factor;
    }
    document.getElementById("sentence2").innerHTML = `<p>Nilai faktorialnya adalah : ${result}</p>`;
}