// var ctx = document.getElementById('myChart');
// chart.default.scale.tricks.beginAtZero = true;
// var chart = new Chart(ctx, {
//     // The type of chart we want to create
//     type: 'doughnut',

//     // The data for our dataset
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'rgb(255, 99, 132)',
//             borderColor: 'rgb(255, 99, 132)',
//             data: [5, 10, 5, 2, 20]
//         }]
//     },

//     // Configuration options go here
//     options: {
//         animation: 
//         {
//             animationScale = true;
//         }
//     }
// });
var options = {
    series: [44, 55, 41, 17, 15],
    chart: {
    type: 'donut',
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#myChart"), options);
  chart.render();