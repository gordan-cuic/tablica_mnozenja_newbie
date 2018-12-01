function loader() {
    let cells = document.querySelectorAll('td')
    for (let i = 0; i < cells.length; i++) {
        let cell = cells[i];
        if (!cell.getAttribute('class')) {
            cell.addEventListener("click", function(event) {
                let value = this.textContent;
                value = value.split(" x ");
                let factorOne = parseInt(value[0]);
                let factorTwo = parseInt(value[1]);
                let res = factorOne * factorTwo;
                let msg = factorOne.toString() + ' x ' + factorTwo.toString()
                msg += ' = ' +  res;
                console.log(msg);
            });
        }
    }
}