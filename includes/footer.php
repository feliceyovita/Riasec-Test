<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		backgroundColor: "#faf5ff",  
		title:{
			text: "Hasil dari Riasec-Test dalam Diagram "              
		},
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "Realistic", 
				y: <?php echo $scorePercentageList['R']?>  },
				
				{ label: "Investigative",
				y: <?php echo $scorePercentageList['I']?>  },
				
				{ label: "Artistic",	
				y: <?php echo $scorePercentageList['A']?>  },

				{ label: "Social", 
				y: <?php echo $scorePercentageList['S']?>  },
				
				{ label: "Enterprising", 
				y: <?php echo $scorePercentageList['E']?>  },
				
				{ label: "Conventional", 
				y: <?php echo $scorePercentageList['C']?> }
			]
		}
		]
	});
	chart.render();
}
</script>
</body>
</html>