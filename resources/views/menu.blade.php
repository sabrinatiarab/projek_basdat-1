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
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="food-item">
              <i class="flaticon-burger"></i>
              <h2>Sandwiches</h2>
              <p>
                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
                facilis ornare velit non vulputa. Aliquam metus tortor auctor
                quis sem.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="food-item">
              <i class="flaticon-snack"></i>
              <h2>Sides</h2>
              <p>
                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
                facilis ornare velit non vulputa. Aliquam metus tortor auctor
                quis sem.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="food-item">
              <i class="flaticon-cocktail"></i>
              <h2>Beverages</h2>
              <p>
                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit
                facilis ornare velit non vulputa. Aliquam metus tortor auctor
                quis sem.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Food End -->

    <!-- Menu Start -->
    <div class="menu">
      <div class="container">
        <div class="section-header text-center">
          <p>Food Menu</p>
          <h2>Delicious Food Menu</h2>
        </div>
        <div class="menu-tab">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#burgers"
                >Sandwiches</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#snacks">Sides</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#beverages"
                >Beverages</a
              >
            </li>
          </ul>
          <div class="tab-content">
            <div id="burgers" class="container tab-pane active">
              <div class="row">
                <div class="col-lg-7 col-md-12">
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Bread</a
                    >
                    <div class="dropdown-menu">
                      <input class="dropdown-item" type= "radio" name="roti" value= "white_italian">White Italian 
                      <input class="dropdown-item" type= "radio" name="roti" value= "wheat">Wheat 
                      <input class="dropdown-item" type= "radio" name="roti" value= "honey_oat">Honey Oat
                    </div>
                  </div>
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Size</a
                    >
                    <div class="dropdown-menu">
                      <input class="dropdown-item" type= "radio" name="ukuran" value= "6_inch">6 inch
                      <input class="dropdown-item" type= "radio" name="roti" value= "footlong">Footlong
                    </div>
                  </div>
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Extra</a
                    >
                    <div class="dropdown-menu">
                      <input class="dropdown-item" type= "checkbox" name="tambahan" value= "double_meat">Double Meat <br>
                      <input class="dropdown-item" type= "checkbox" name="tambahan" value= "extra_cheese">Extra Cheese <br>
                      <input class="dropdown-item" type= "checkbox" name="tambahan" value= "no_extras">No Extras
                    </div>
                  </div>
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Veggies</a
                    >
                    <div class="dropdown-menu">
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "lettuce">Lettuce</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "tomatoes">Tomatoes</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "cucumber">Cucumbers</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "pickles">Pickles</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "green_peppers">Green Peppers</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "olive">Olives</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "white_onions">White Onions</a>
                      <a class="dropdown-item" type= "checkbox" name="sayur" value= "no_veggies">No Veggies</a>
                    </div>
                  </div>
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Sauce</a
                    >
                    <div class="dropdown-menu">
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "honey_mustard">Honey Mustard</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "sweet_onion">Sweet Onion</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "chipotle_southwest">Chipotle Southwest</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "mayonnaise">Mayonnaise</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "bbq_sauce">BBQ Sauce</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "tomato_sauce">Tomato Sauce</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "thousand_island_dressing">Thousand Island Dressing</a>
                      <a class="dropdown-item" type= "checkbox" name="saus" value= "hot_chilli_sauce">Hot Chilli Sauce</a>
                    </div>
                  </div>
                <div class="col-lg-5 d-none d-lg-block">
                  <img src="img/menu-burger-img.jpg" alt="Image" />
                </div>
              </div>
            </div>
            <div id="snacks" class="container tab-pane fade">
              <div class="row">
                <div class="col-lg-7 col-md-12">
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Oatmeal Raisin Cookies</span>
                        <strong>Rp19.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Chocolate Chip Cookie</span> <strong>Rp19.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Double Chocolate Chip Cookie</span>
                        <strong>Rp19.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>White Chip Macadamia Nut Cookie</span>
                        <strong>Rp19.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Chicken Slice and Cheese</span>
                        <strong>Rp17.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Egg Mayo Toasty</span>
                        <strong>Rp17.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Pringles Original</span>
                        <strong>Rp17.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Pringles Sour Cream and Onion</span>
                        <strong>Rp17.500</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Mushroom Soup</span>
                        <strong>Rp29.500</strong>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                  <img src="img/menu-snack-img.jpg" alt="Image" />
                </div>
              </div>
            </div>
            <div id="beverages" class="container tab-pane fade">
              <div class="row">
                <div class="col-lg-7 col-md-12">
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Aqua 300ml</span> <strong>Rp9.000</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Carbonated Drinks 16oz</span> <strong>Rp19.000</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Coffee Latte 8oz</span> <strong>Rp25.000</strong>
                      </h3>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-text">
                      <h3>
                        <span>Minute Maid Pulpy Orange</span>
                        <strong>Rp17.000</strong>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                  <img src="img/menu-beverage-img.jpg" alt="Image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menu End -->
