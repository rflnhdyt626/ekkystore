<!DOCTYPE html>
<html>
   <head>
      <title>Membuat Formulir Order Checkout Ke Pesan WhatsApp - ePlusGo</title>
              <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- AkhirBoostrap -->
        <!-- My css -->
        <link rel="stylesheet" type="text/css" href="assets/css/airis.css">
        <!-- akhir css -->
        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <!-- ttup icon -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   </head>
<body>
	<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark  shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="assets/img/logo3.png" width="250px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="order.php">Daftar Menu</a>
              </div>
            </div>
          </div>
        </nav>
        <!-- tutup -->
        <!-- daftar menu -->
        <section id="banner">
          <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/image/banner1.png" class="d-block w-100" alt="s">
                </div>
                <div class="carousel-item">
                  <img src="assets/image/banner2.png" class="d-block w-100" alt="ss">
                </div>
                <div class="carousel-item">
                  <img src="assets/image/banner3.png" class="d-block w-100" alt="sss">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>
        <!-- akhir -->
	<div class="container">
		            <div class="row text-center mb-3">
              <div class="col">
                <br>
                <h2>PESAN SEKARANG</h2>
              </div>
            </div>
		<div class="col">
			<h4>Isi Formulir Dibawah untuk memulai Pesanan.</h4>
			<div class="panel panel-success">
				<div class="panel-heading">
					Checkout Ke WhatsApp
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" class="form-control" placeholder="Nama" id="name">
					</div>
					<div class="form-group">
						<label>Jumlah Pesana</label>
						<input type="text" name="email" class="form-control" placeholder="Jumlah" id="email">
					</div>
					<div class="form-group">
						<label>Nomor Kontak / WhatsApp</label>
						<input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
					</div>
					<div class="form-group">
          <label>PILIH MAKANAN</label>
          <select name="product" class="form-control" id="product">
            <option value="">-- Pilih --</option>
            <option value="Rp.8.000 - Chicken Burger">Rp.8.000 - Chicken Burger</option>
            <option value="Rp.15.000 - Sop Iga">Rp.15.000 - Sop Iga</option>
            <option value="Rp.10.000 - Gado-Gado">Rp.10.000 - Gado-Gado</option>
            <option value="Rp.10.000 - Bakso Cuanki">Rp.10.000 - Bakso Cuanki</option>
            <option value="Rp.10.000 - Bakso Seafood Kuah Tomyang">Rp.10.000 - Bakso Seafood Kuah Tomyang</option>
            <option value="Rp.10.000 - Nasi Remes">Rp.10.000 - Nasi Remes</option>
            <option value="Rp.10.000 - Mie Angle">Rp.10.000 - Mie Angle</option>
            <option value="Rp.10.000 - Miso Ceker, Ati, Ampela">Rp.10.000 - Miso Ceker, Ati, Ampela</option>
            <option value="Rp.10.000 - Bakso Seafood Kuah Original">Rp.10.000 - Bakso Seafood Kuah Original</option>
            <option value="Rp.15.000 - Dimsum Premium">Rp.15.000- Dimsum Premium</option>
            <option value="Rp.10.000 - Soto Ayam">Rp.10.000 - Soto Ayam</option>
            <option value="Rp.15.000 - Ayam Penyet Sambel Terasi">Rp.15.000 - Ayam Penyet Sambel Terasi</option>
          </select>
        </div>
					<div class="form-group">
						<label>Catatan</label>
						<textarea name="description" class="form-control" rows="3" id="description"></textarea>
					</div>
					<br>
					<div class="form-group">
						<button class="btn btn-success send">Pesan via WhatsApp</button>
					</div>

					<div id="text-info"></div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
<!-- footer -->
    <footer class="bg-primary text-white text-center pb-10">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://instagram.com/ekiwp2400" class="text-white fw-bold">Eki Wandana P</a></p>
    </footer>
	<script type="text/javascript">
		$(document).on('click','.send', function(){
			/* Inputan Formulir */
			var input_name 			= $("#name").val(),
			    input_email 		= $("#email").val(),
			    input_phone 		= $("#phone").val(),
			    input_product 		= $("#product").val(),
			    input_description 	= $("#description").val();

			/* Pengaturan Whatsapp */
			var walink 		= 'https://web.whatsapp.com/send',
			    phone 		= '6281360417510',
			    text 		= 'Halo saya ingin memesan ',
			    text_yes	= 'Pesanan Anda berhasil terkirim.',
			    text_no 	= 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if(input_name != "" && input_phone != "" && input_product != ""){
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
				    '*Nama* : ' + input_name + '%0A' +
				    '*Jumlah Pesanan* : ' + input_email + '%0A' +
				    '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
				    '*Nama Makanan* : ' + input_product + '%0A' +
				    '*Catatan* : ' + input_description + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp,'_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
			}
		});
	</script>
	        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>