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

<!-- Food Start -->
<div class="food mt-0">
  <div class="container">
    <div class="section-header text-center">
      <p>Food Menu</p>
      <h2>Delicious Food Menu</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-md-4">
        <a href="{{url('/sandwich')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-burger"></i>
            <h2>Sandwiches</h2>
            <p>
              Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
              facilis ornare velit non vulputa. Aliquam metus tortor auctor
              quis sem.
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/sides')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-snack"></i>
            <h2>Sides</h2>
            <p>
              Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
              facilis ornare velit non vulputa. Aliquam metus tortor auctor
              quis sem.
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/beverages')}}" class="hvnb">
          <div class="food-item">
            <i class="flaticon-cocktail"></i>
            <h2>Beverages</h2>
            <p>
              Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
              facilis ornare velit non vulputa. Aliquam metus tortor auctor
              quis sem.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Food End -->