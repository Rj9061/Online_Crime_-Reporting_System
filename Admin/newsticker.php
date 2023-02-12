
<head>

<style>
	.newsTicker .card .card-header{
		padding: .9rem 1.5rem .5rem;
	}
	.newsTicker .card .card-header span{
		padding: .19rem;
    	font-size: 21px;
    	margin-right: 10px;
    	color: #8dc8f7;
	}
	.newsTicker .card .card-body #news{
		position: relative;
	}
	.newsTicker .card .card-body #news:before{
		content: '';
	    position: absolute;
	    top: 0;
	    left: 22px;
	    height: 100%;
	    width: 4px;
	    background: #e9ecef;
	    border-radius: .35rem;
	}
	.newsTicker .card .card-body #news .news_content span{
		position: absolute;
	    height: 16px;
	    width: 16px;
	    color: red;
	    left: 0;
	    margin: 11px 15.8px;
	    border-radius: 50%;
	    border: 3px solid brown;
	}
	.newsTicker .card .card-body #news .news_content span:nth-child(1){
		border: 3px solid red;
		top: 15%;
	}
	.newsTicker .card .card-body #news .news_content span:nth-child(2){
		border: 3px solid #57bfef;;
		top: 32%;
		margin-top: 13px;
	}
	.newsTicker .card .card-body #news .news_content span:nth-child(3){
		border: 3px solid yellow;
		top: 50%;
	}
	.newsTicker .card .card-body #news .news_content span:nth-child(4){
		border: 3px solid indigo;
		top: 65%;
	}
	.newsTicker .card .card-body #news .news_content span:nth-child(5){
		border: 3px solid green;
		top: 83%;
	}
	.newsTicker .card .card-body #news span:before{
		content: '';
	    position: absolute;
	    background: #fff;
	    left: -0.1;
	    top: 50%;
	    margin: -4.2px -8px 0 1.6px;
	    display: block;
	    width: 8px;
	    height: 8px;
	    border-radius: 50%;
	    padding: 3.8px;
	}

	.newsTicker .card .card-body #news li{
		list-style: none;
		font-weight: normal;
    	font-size: .9375rem;
    	font-family: "Roboto",sans-serif;
    	padding: .5rem 1rem;
    	position: relative;
	}
	.newsTicker .card .card-body #news li a{
		text-decoration: none;
		color: #4f4f4f;
	}
</style>
</head>
<div class="newsTicker">
	<div class="card">
		<div class="card-header bg-white d-flex">
			<span><i class="far fa-newspaper"></i></span>
			<h5>News</h5>
		</div>
		<div class="card-body">
			<ul id="news">
				<div class='news_content'>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				<?php
					$get="select * from newsticker";
					$run=mysqli_query($con,$get);
					while ($row=mysqli_fetch_array($run)) {
						$news=$row['news'];

						echo "<li><a href=''>$news </a></li>";
					}
				?>
				</div>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
	function startTicker()
	{
		$("#news li:first").slideDown(function(){
			
			$(this).appendTo($("#news")).slideDown();
			});		
	}
	setInterval(startTicker, 2500);	

</script>