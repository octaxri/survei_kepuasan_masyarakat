 <script>
  
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var barChart =new Chart(document.getElementById("myBarChart"), {
    type: 'bar',
    data: {
       labels: [<?php foreach ($getDataUsia as $usia){ ?><?= "'".$usia->pendidikan." - Usia ".$usia->usia."'," ?><?php } ?>],
      datasets: [
        {
          label: "Total Data",
          backgroundColor: "#f1c40f",
          data: [<?php foreach ($getDataUsia as $usia){ ?><?= $usia->total."," ?><?php } ?>]
        }
      ]
    },
    options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true,
                 userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }

                 },
             }
         }],
     },
      title: {
        display: true,
        text: 'Grafik Usia & Pendidikan'
      }
    }
});


</script>