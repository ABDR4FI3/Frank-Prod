'use strict';

$(document).ready(function() {

	function generateData(baseval, count, yrange) {
		var i = 0;
		var series = [];
		while (i < count) {
			var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
			var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
			var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

			series.push([x, y, z]);
			baseval += 86400000;
			i++;
		}
		return series;
	}


	// Column chart
	var columnCtx = document.getElementById("sales_chart"),
	columnConfig = {
		colors: ['#7638ff', '#22cc62', '#ef3737'],
		series: [
			{
			name: "CA MAD",
			type: "column",
			data: paymentPerMonth
			},
			{
			name: "CA EUR",
			type: "column",
			data: paymentPerMonthEur
			},
			{
			name: "CA Pound",
			type: "column",
			data: paymentPerMonthPound
			}
		],
		chart: {
			type: 'bar',
			fontFamily: 'Poppins, sans-serif',
			height: 350,
			toolbar: {
				show: false
			}
		},
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '60%',
				endingShape: 'rounded'
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		},
		yaxis: {
			title: {
				text: 'Chiffre d\'affaire'
			}
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			y: {
				formatter: function (val) {
					return val
				}
			}
		}
	};
	var columnChart = new ApexCharts(columnCtx, columnConfig);
	columnChart.render();

	//Pie Chart
	var pieCtx = document.getElementById("invoice_chart"),
	pieConfig = {
		colors: ['#22cc62', '#ef3737', '#ffb800'],
		series: [facturePaye, factureimpaye, facturePartial],
		chart: {
			fontFamily: 'Poppins, sans-serif',
			height: 350,
			type: 'donut',
		},
		labels: ['Payée', 'Impayée', 'Payée Partialement'],
		legend: {show: false},
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
	var pieChart = new ApexCharts(pieCtx, pieConfig);
	pieChart.render();
  
});