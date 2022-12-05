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
			<div class="col-md-4">
				<a href="{{url('/snack_detail')}}" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp9.000</span>
							</div>
							<p class="card-text text-dark">Aqua 300ml</p>
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
				<a href="{{url('/snack_detail')}}" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/2.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp19.000</span>
							</div>
							<p class="card-text text-dark">Carvonated Drinks 16oz</p>
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
				<a href="{{url('/snack_detail')}}" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/3.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp25.000</span>
							</div>
							<p class="card-text text-dark">Coffee Latte 8oz</p>
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
				<a href="{{url('/snack_detail')}}" class="hvnb">
					<div class="list-group shadow-sm">
						<div class="list-group-item gambar-produk" style="background: url(assets/img/produk/4.jpg);">
						</div>
						<div class="list-group-item">
							<div class="mb-2">
								<span class="active text-website">Rp17.000</span>
							</div>
							<p class="card-text text-dark">Minute Maid Pulpy Orange</p>
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