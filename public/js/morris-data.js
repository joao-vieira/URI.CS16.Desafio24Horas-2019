// Dashboard 1 Morris-chart
$(function () {
    "use strict";

// Morris bar chart
    Morris.Bar({
        element: 'dashboard-bar',
        data: [{
            y: 'Qualidade',
            a: 90
        }, {
            y: 'Performance',
            a: 75
        }, {
            y: 'Disponibilidade',
            a: 65
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Valor'],
        barColors:['#55ce63', '#2f3d4a', '#009efb'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });

 // Morris donut chart
        
 Morris.Donut({
    element: 'dashboard-donut',
    data: [{
        label: "Eficiência",
        value: 55,

    }, {
        label: "",
        value: 15
    }, {
        label: "",
        value: 30
    }],
    resize: true,
    colors:['#009efb', '#fff', '#fff']
});

 });    