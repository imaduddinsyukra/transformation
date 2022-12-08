<!doctype html>
<html lang="en">
  <head>
  	<title>Smart Associtation Transformation - SAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/x-icon" href="{{ asset('/homepage/images/logo/favicon.ico') }}" />
	{{-- <link id="icon" rel="shortcut icon" href="{{ asset('/homepage/images/logo.png') }}" type="image/x-icon"> --}}
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" type="text/css" href="{{ asset('/homepage/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			{{-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Form #09</h2>
				</div>
			</div> --}}
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="contact-wrap">
									<br/><br/><br/>
									<h3 class="mb-4 text-center">Masukkan Data yang ingin ditampilkan</h3>
									<h5 class="mb-4 text-center"><font color='white'>Jumlah Data Kamu Sebanyak {{$data}}</font></h5>
									<br/>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
									<form method="POST" enctype="multipart/form-data" action="/transaksi" class="contactForm">
										@csrf
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<input type="text" class="form-control" name="awal" id="awal" placeholder="Contoh: 1" required>
												</div>
											</div>
											<div class="col-md-2" style="text-align: center">
												sampai
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<input type="text" class="form-control" name="akhir" id="akhir" placeholder="Contoh: 100" required>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Lihat Data" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{ asset('/homepage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/popper.js') }}"></script>
    <script src="{{ asset('/homepage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/main.js') }}"></script>
    <script src="{{ asset('/homepage/js/main.js')}}"></script>

	</body>
</html>

