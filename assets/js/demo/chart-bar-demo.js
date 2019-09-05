// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

new Chart(document.getElementById("myBarChart"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [
        {
          label: "Pertanyaan",
          backgroundColor: "#f1c40f",
          data: [133,221,783,2478]
        }
      ]
    },
    options: {
      title: {
        display: false,
        text: 'Population growth (millions)'
      }
    }
});
