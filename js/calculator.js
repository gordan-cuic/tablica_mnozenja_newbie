window.onload = function() {
    // kreiram tablicu unutar kontejnera1

    // inicijaliziram matricu s brojevima 1 do 10
    let values = [];
    for (let i = 0; i < 10; i++) {
        values.push(i + 1);
    }

    let tableContainer = document.querySelector('#dynamic-table-container');
    
    let table = document.createElement('table');
    tableContainer.appendChild(table);
    
    let tableHead = document.createElement('thead');
    table.appendChild(tableHead);
    
    let tableBody = document.createElement('tbody');
    table.appendChild(tableBody);

    let tableHeadRow = document.createElement('tr');
    tableHead.appendChild(tableHeadRow);

    // fill table header
    let tableHeadRowCellZero = document.createElement('th');
    tableHeadRow.appendChild(tableHeadRowCellZero);  // cell in position 0, 0
    for (let i = 0; i < values.length; i++) {
        let cell = document.createElement('th');
        let val = values[i];
        cell.setAttribute('id', 'x' + val.toString())
        cell.innerHTML(val.toString());
        tableHeadRow.appendChild(cell);
    }

    // fill table rows
    for (let i = 0; i < values.length; i++) {
        let row = document.createElement('tr')
        let cell = document.createElement('td');
        let val = values[i];
        
        cell.setAttribute('id', 'y' + val.toString())
        cell.innerHTML(val.toString());

        row.appendChild(cell);
        tableBody.appendChild(row);
    }

};