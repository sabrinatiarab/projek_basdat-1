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
	<div class="row align-items-center my-4">
		<!-- Awal slot produk -->

		<!-- Pemisah per produk -->
		<div class="col-md-4 my-4">
			<a href="{{url('/sandwich_detail')}}" class="hvnb">
				<div class="list-group shadow-sm">
				<img src="/img/1.jpg">
					<div class="list-group-item">
						<div class="mb-2">
							<span class="active text-website text-xl font-bold">Chicken Teriyaki</span>
							<span class="float-right text-muted text-m">Rp37,500.00</span>
						</div>
						<p class="card-text text-dark text-sm">An Asian classic gourmet made with a flavorful blend of tender chicken pieces dressed lightly with teriyaki sauce. Served hot and topped with your choice of crisp vegetables and condiments on freshly baked bread.</p>
					</div>
					<div class="list-group-item btn-outline-success pl-3">
						Detail Produk
					</div>
				</div>
			</a>
		</div>
		<!-- Pemisah per produk -->

		<!-- Pemisah per produk -->
		<div class="col-md-4 my-4">
			<a href="{{url('/sandwich_detail')}}" class="hvnb">
				<div class="list-group shadow-sm">
				<img src="/img/1.jpg">
					<div class="list-group-item">
						<div class="mb-2">
							<span class="active text-website text-xl font-bold">BBQ Chicken</span>
							<span class="float-right text-muted text-m">Rp37,500.00</span>
						</div>
						<p class="card-text text-dark text-sm">An Asian classic gourmet made with a flavorful blend of tender chicken pieces dressed lightly with teriyaki sauce. Served hot and topped with your choice of crisp vegetables and condiments on freshly baked bread.</p>
					</div>
					<div class="list-group-item btn-outline-success pl-3">
						Detail Produk
					</div>
				</div>
			</a>
		</div>
		<!-- Pemisah per produk -->

		<!-- Pemisah per produk -->
		<div class="col-md-4">
			<a href="{{url('/sandwich_detail')}}" class="hvnb">
				<div class="list-group shadow-sm">
				<img src="/img/1.jpg">
					<div class="list-group-item">
						<div class="mb-2">
							<span class="active text-website text-xl font-bold">Tuna Mayo</span>
							<span class="float-right text-muted text-m">Rp33,000.00</span>
						</div>
						<p class="card-text text-dark text-sm">An Asian classic gourmet made with a flavorful blend of tender chicken pieces dressed lightly with teriyaki sauce. Served hot and topped with your choice of crisp vegetables and condiments on freshly baked bread.</p>
					</div>
					<div class="list-group-item btn-outline-success pl-3">
						Detail Produk
					</div>
				</div>
			</a>
		</div>
		<!-- Pemisah per produk -->

		<!-- Pemisah per produk -->
	
		<!-- Akhir slot produk -->
	</div>