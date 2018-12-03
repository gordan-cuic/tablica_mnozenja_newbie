$(document).ready(function($) {
    let cells = document.querySelectorAll('td')
    if (!cells) {
        alert('Ne mogu dohvatiti celije tablice');
    }
    for (let i = 0; i < cells.length; i++) {
        let cell = cells[i];
        if (!cell.getAttribute('class')) {
            cell.addEventListener("click", function(event) {
                let value = this.textContent;
                if (!value) {
                    alert('Celija nema unesenu vrijednost');
                }
                value = value.split(" x ");
                let factorOne = parseInt(value[0]);
                let factorTwo = parseInt(value[1]);
                let res = factorOne * factorTwo;
                let msg = factorOne.toString() + ' x ' + factorTwo.toString()
                msg += ' = ' +  res;
                console.log(msg);

                let actions = {};
                actions["execute"] = "insert";
                actions["data"] = {factor1: factorOne, factor2: factorTwo, result: res}
                $.ajax({
                    url : 'class/calculator.class.php',
                    type: 'POST',
                    data: actions,
                    //dataType: "JSON",
                }).done(function(data, textStatus, jqXHR) {
                    // splash result
                    let dimmer = document.querySelector('.dimmer');
                    if (!dimmer) {
                        alert('Ne mogu dohvatiti div za zatamnjenje pozadine');
                    }

                    let resultHolder = document.querySelector('.result-holder');
                    if (!resultHolder) {
                        alert('Ne mogu dohvatiti element za prikaz rezultata');
                    }
                    resultHolder.innerHTML = res.toString();
                    
                    dimmer.style.display = 'block';

                    let dimmerExit = document.querySelector('.exit');
                    if (!dimmerExit) {
                        alert('Ne mogu dohvatiti div za gumb za zatvaranje rezultata');
                    }
                    dimmerExit.addEventListener("click", function(event) {
                        dimmer.style.display = 'none';    
                        let resp = JSON.parse(data);
                        $('#response-block').attr('class', 'isok');
                        $('#response-block').html('<p>' + resp.msg + '</p>');
                    }); 
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    $('#response-block').attr('class', 'notok');
                    $('#response-block').html('<p>' + errorThrown + '</p>');
                });
            }); 
        }
    }
});