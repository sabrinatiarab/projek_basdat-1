@extends('/base_pelanggan')

    <!-- Page Header Start -->
    <div class="page-header mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Food Menu</h2>
          </div>
          <div class="col-12">
            <a href="">Home</a>
            <a href="">Menu</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
		<div class="row align-items-center">
			<!-- Awal slot produk -->

			<!-- Pemisah per produk -->
			<form method="post" action="/cart">
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp19.500</span>
							</div>
							<p class="card-text text-dark">Oatmeal Raisin Cookies</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text" id="decrement">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button id="increment" class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
							<input type="submit" value="Submit">
						</div>
					</div>
				</a>
			</div>
			</form>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/2.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp19.500</span>
							</div>
							<p class="card-text text-dark">Chocolate Chip Cookie</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button id="decrement"  class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button id="increment" class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/3.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp19.500</span>
							</div>
							<p class="card-text text-dark">Double Chocolate Chip Cookie</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/4.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp19.500</span>
							</div>
							<p class="card-text text-dark">White Chip Macadamia Nut Cookie</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/5.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp17.500</span>
							</div>
							<p class="card-text text-dark">Chicken Slice and Cheese</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/6.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp17.500</span>
							</div>
							<p class="card-text text-dark">Egg Mayo Toasty</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/7.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp17.500</span>
							</div>
							<p class="card-text text-dark">Pringles Original</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/8.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp17.500</span>
							</div>
							<p class="card-text text-dark">Pringles Sour Cream and Onion</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Pemisah per produk -->
			<div class="col-md-4">
				<a href="" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/8.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp29.500</span>
							</div>
							<p class="card-text text-dark">Mushroom Soup</p>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										<button class="input-group-text">-</button>
									</div>
									<input type="text" class="form-control" value="1">
									<div class="input-group-append">
										<button class="input-group-text">+</button>
									</div>
							</div>
						</div>
						<div class="list-group-item btn-outline-success pl-3">
							Add to Cart
						</div>
					</div>
				</a>
			</div>
			<!-- Pemisah per produk -->

			<!-- Akhir slot produk -->
		</div>
</div>
-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--
    - custom js link
  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="resources/js/script.js"></script>

    <!--
    - ionicon link
    -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="resources/zjs/main.js"></script>