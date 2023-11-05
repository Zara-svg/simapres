/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const barConfig = {
  type: "bar",
  data: {
    labels: ["2020", "2021", "2022"],
    datasets: [
      {
        label: "Regional",
        backgroundColor: "#263A59",
        // borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [50, 54, 52],
      },
      {
        label: "Nasional",
        backgroundColor: "#EEAC2D",
        // borderColor: window.chartColors.yellow,
        borderWidth: 1,
        data: [60, 57, 65],
      },
      {
        label: "Internasional",
        backgroundColor: "#7E857E",
        // borderColor: window.chartColors.gray,
        borderWidth: 1,
        data: [57, 53, 42],
      },
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
  },
};

const barsCtx = document.getElementById("bars");
window.myBar = new Chart(barsCtx, barConfig);
