<head>
	<?php
		include ("../links/alllinks.php");
	?>

	<style>
		.crime_rate .card .card-header{
			padding: .9rem 1.5rem .5rem;
			background: #fff;
		}
		.crime_rate .card .card-header h5{
			margin-left: 15px;
			font-size: 1.3rem !important;
			font-weight: 400 !important;
			opacity: .8;
			letter-spacing: 1px;
		}
		.crime_rate .card .card-header i{
			margin-top: 4px;
			color: #5cd1f5;
    		font-size: 20px;
		}
		.crime_rate .card .card-body .upper_section{
			padding: 1rem 1rem;
		}
		.crime_rate .card .card-body .upper_section h5{
			font-size: 1rem;
			font-weight: 400;
			opacity: .7;
			text-transform: uppercase;
			letter-spacing: .5px;
		}

	</style>
</head>
	<div class="crime_rate">
		<div class="card">
			<div class="card-header d-flex">
				<span><i class="fas fa-align-left"></i></span>
				<h5>Crime Rate</h5>
			</div>
			<div class="card-body">
				<div class="upper_section">
					<div>
						<h5>Crime Rate 2019</h5>
					</div>
				</div>
				<div class="lower_section">
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
	</div>
<script>
	var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',

    data: {
        labels:[
				  '',
				  'Andhra Pradesh',
				  'Arunachal Pradesh',
				  'Assam',
				  'Bihar',
				  'Chattisgarh',
				  'Goa',
				  'Gujarat',
				  'Haryana',
				  'Himachal Pradesh',
				  'Jammu & Kashmir',
				  'Jharkhand',
				  'Karnataka',
				  'Kerala',
				  'Madhya Pradesh',
				  'Maharastra',
				  'Mainpur',
				  'Meghalaya',
				  'Mizoram',
				  'Nagaland',
				  'Odisha',
				  'Punjab',
				  'Rajasthan',
				  'Sikkim',
				  'Tamilnadu',
				  'Telangana',
				  'Tripura',
				  'Uttar Pradesh',
				  'Uttarakhand',
				  'West Bengal',
				],
        datasets: [{
            label: 'Crime Rate',
             lineTension: 0.4,
             fill: 'origin',
            data: [0, 14.7, 45.0, 83.4, 37.5, 27.1, 26.9, 13.9, 44.5, 25.1, 22.9, 32.4, 24.9, 30.2, 36.0, 21.6, 21.0, 13.6, 8.4, 48.4, 22.6, 29.6, 28.3, 14.4, 23.2, 53.6, 24.6, 25.4, 45.8],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    	animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
         scales: {
      y: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: 100
      }
    }	
    }
});
</script>