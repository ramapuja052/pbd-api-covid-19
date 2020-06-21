<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Pantau Penyebaran COVID-19  </title>
  </head>
  <body>
	  <div class="jumbotron jumbotron-fluid bg-secondary text-white">
	  <div class="container text-center">
	    <p class="lead">
	    	<h2> WEB PEMANTAUAN VIRUS COVID-19 DI INDONESIA 
	    	<br> SECARA REAL-TIME
	    	 </h2><br>
	    	 <h3> Oleh Ahmad Shobirin </h3>
	    </p>
	  </div>
	</div>
	<style type="text/css">
		.box{
			padding: 30px 40px;
			border-radius:10px;
		}
	</style>



	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="bg-info box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-3">
							<img src="img/dunia.png" style="width: 200px ">
						</div>
							<h2>DUNIA</h2>
							<h5 id="data-dunia"> Positif : 12 Orang <br> Meninggal : 20 Orang <br> Sembuh : 3 Orang </h5>
						</div>	 
					</div>
				</div>
			</div>
		</center>
			<div class="col-md-4 mt-3">
				<div class="bg-warning box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Positif</h5>
							<h2 id="data-kasus">1234</h2>
							<h5>Orang</h5>
						</div>		 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-danger box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Meninggal</h5>
							<h2 id="data-mati">1235</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-success box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Sembuh</h5>
							<h2 id="data-sembuh">1235</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>

			<div class="col-md-12 mt-3">
				<div class="bg-info box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-3">
							<img src="img/indonesia.svg" style="width: 150px ">
						</div>
							<h2>INDONESIA</h2>
							<h5 id="data-id"> Positif : 12 Orang <br> Meninggal : 20 Orang <br> Sembuh : 3 Orang </h5>
						</div>
								 
					</div>
				</div>
			</div>
		</center>

			<div class="col-md-4 mt-3">
				<div class="bg-warning box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Positif</h5>
							<h2 id="data-kasus-id">1234</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-danger box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Meninggal</h5>
							<h2 id="data-mati-id">1235</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-success box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Sembuh</h5>
							<h2 id="data-sembuh-id">1235</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-warning box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Rawat</h5>
							<h2 id="data-rawat-id">1235</h2>
							<h5>Orang</h5>
						</div>	 
					</div>
				</div>
			</div>
</center>
			<div class="col-md-4 mt-3">
				<div class="bg-danger box text-white">
					<center>
					<div class="row">
						<div class="col-md-12">
							<h5>Hari ini</h5>
							<h2 id="data-hari-id">1235</h2>
							<h5>Orang</h5>
						</div>		 
					</div>
				</div>
			</div>
</center>

		</div>
		<div class="card mt-3">
		  <div class="card-header bg-danger text-white">
		    <b> Data Kasus Corona Virus di Indonesia Berdasarkan Provinsi</b>
		  </div>
		  <div class="card-body">
		   <table class="table table-bordered">
			<thead>
				<th>No</th>
				<th>Nama Provinsi</th>
				<th>Positif</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</thead>
			<tbody id="table-data"></tbody>
		</table> 
		  </div>
		</div>
		



	</div>

	<footer class="bg-secondary text-center text-white mt-3 bt-2 pb-2">
		Ahmad Shobirin Al-ansyori | Website : 18753006.blogspot.com | Copyright &copy2020
	</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
  </body>
</html> 

<script> 
	$(document).ready(function(){
		
		//Fungsi menampilakan & memanggil Data

		semuaData();
		dataNegara();
		dataProvinsi();
		
		//Auto update data
		setInterval(function(){
			semuaData();
			dataNegara();
			dataProvinsi();
		}, 3000);

		function semuaData(){
			$.ajax({
				url : 'https://coronavirus-19-api.herokuapp.com/all',
				success : function(data){
					try{
						var json = data;
						var kasus = data.cases;
						var Meninggal = data.deaths;
						var Sembuh = data.recovered;

						$('#data-kasus').html(kasus);
						$('#data-mati').html(Meninggal);
						$('#data-sembuh').html(Sembuh);
							
							
								$('#data-dunia').html(
									'Positif : '+kasus+' orang <br> Meninggal : '+Meninggal+' orang <br> Sembuh : '+Sembuh+' orang')

					}catch{
						alert('Errorr');
					}
				}

			}); 
		}

		function dataNegara(){
			$.ajax({
				url : 'https://coronavirus-19-api.herokuapp.com/countries',
				success : function(data){
					try{
						var json = data;
						var html = [];


						if(json.length > 0){
							var i;
							for(i = 0; i < json.length; i++){
								var dataNegara = json[i];
								var namaNegara = dataNegara.country;
							
							if(namaNegara === 'Indonesia'){
								var kasus = dataNegara.cases;
								var mati = dataNegara.deaths;
								var Sembuh = dataNegara.recovered;
								var rawat = dataNegara.active;
								var hari = dataNegara.todayCases;


						$('#data-kasus-id').html(kasus);
						$('#data-mati-id').html(mati);
						$('#data-sembuh-id').html(Sembuh);
						$('#data-rawat-id').html(rawat);
						$('#data-hari-id').html(hari);

								$('#data-id').html(
									'Positif : '+kasus+' orang <br> Meninggal : '+mati+' orang <br> Sembuh : '+Sembuh+' orang <br> Rawat : '+rawat+' orang <br> Hari ini : '+hari+' orang')
								}
							}
						}


					}catch{
						alert('Errorr');
					}
				}

			}); 
		}

		function dataProvinsi(){
			$.ajax({
				url : 'curl.php',
				type : 'GET' ,
				success : function(data){
					try{
					 $('#table-data').html(data);

					}catch{
						alert('Errorr');
					}
				}

			}); 
		}
	}); 
</script>