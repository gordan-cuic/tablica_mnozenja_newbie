$(document).ready(function($) {
    // dohvacam sve celije
    let cells = document.querySelectorAll('td')
    if (!cells) {
        alert('Ne mogu dohvatiti celije tablice');
    }
    for (let i = 0; i < cells.length; i++) {
        let cell = cells[i];
        // celije koje nemaju attribute class su validne
        // one sa attributom class su vertiklano prikazani 
        // brojevi za koje ne treba on click event
        if (!cell.getAttribute('class')) {
            cell.addEventListener("click", function(event) {
                let value = this.textContent;
                if (!value) {
                    alert('Celija nema unesenu vrijednost');
                }
                // izracun radim u front-endu
                value = value.split(" x ");
                let factorOne = parseInt(value[0]);
                let factorTwo = parseInt(value[1]);
                let res = factorOne * factorTwo;

                // dohvacam potrebne elemente za prikaz rezultata
                let dimmer = document.querySelector('.dimmer');
                if (!dimmer) {
                    alert('Ne mogu dohvatiti div za zatamnjenje pozadine');
                }
                let resultHolder = document.querySelector('.result-holder');
                if (!resultHolder) {
                    alert('Ne mogu dohvatiti element za prikaz rezultata');
                }
                let dimmerExit = document.querySelector('.exit');
                if (!dimmerExit) {
                    alert('Ne mogu dohvatiti div za gumb za zatvaranje rezultata');
                }

                // saljem podatke u bazu
                let actions = {};
                actions["execute"] = "insert";
                actions["data"] = {factor1: factorOne, factor2: factorTwo, result: res}
                $.ajax({
                    url : 'class/calculator.class.php',
                    type: 'POST',
                    data: actions,
                    //dataType: "JSON",
                }).done(function(data, textStatus, jqXHR) {
                    // prikazi rezultat
                    resultHolder.innerHTML = res.toString();                   
                    dimmer.style.display = 'block';
                    // dodajem click opciju na "Zatvori"
                    dimmerExit.addEventListener("click", function(event) {
                        dimmer.style.display = 'none';
                        // parsiram podatke dobivene u repose-u  
                        let resp = JSON.parse(data);
                        // prikazujem ispod tablice
                        $('#response-block').attr('class', 'isok');
                        $('#response-block').html('<p>' + resp.msg + '</p>');
                    }); 
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    // prikazujem gresku - nije json, obican string
                    $('#response-block').attr('class', 'notok');
                    $('#response-block').html('<p>' + errorThrown + '</p>');
                });
            }); 
        }
    }
});