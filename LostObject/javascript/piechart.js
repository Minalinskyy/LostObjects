var table = document.getElementById("table_declared");
var userdata = [{
    values: [table.rows[2].cells[1].innerHTML, table.rows[3].cells[1].innerHTML, table.rows[4].cells[1].innerHTML],
    labels: ['student', 'administrator', 'manager'],
    type: 'pie'
}];

Plotly.newPlot('userstate', userdata);

var objectdata = [{
    values: [table.rows[6].cells[1].innerHTML,table.rows[7].cells[1].innerHTML,table.rows[8].cells[1].innerHTML,table.rows[9].cells[1].innerHTML,table.rows[10].cells[1].innerHTML],
    labels: ['found object','declared object','returned object','given back object','abandoned object'],
    type: 'pie'
}];

Plotly.newPlot('objectstate',objectdata);