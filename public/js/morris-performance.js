// Dashboard 1 Morris-chart
$(function () {
    "use strict";
    Morris.Bar({
        element: 'morris-bar-chart2',
        data: [{
            y: 'CAN1081',
            a: 99                
        }, {
            y: 'CAN3081',
            a: 80                      
        }, {
            y: 'CAN8042',                        
            a: 75
        }, {
            y: 'DG01',                        
            a: 70
        },  {
            y: 'JK10',                        
            a: 60
        },  {
            y: 'JK20',                        
            a: 30
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Performance'],
        barColors:['#049df8'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
 });    