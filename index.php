<?php require 'api/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Affinity Homes</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">

    <link
      href="https://fonts.googleapis.com/css?family=Jost:300,400,500,700&family=Allison;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/styles-3.css" />

    <link rel="stylesheet" href="css/glightbox.min.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html" style="font-size: 24px"
          >Affinity
          <span style="color: #b07032">Homes.</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#properties" class="nav-link">Properties</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#testimonials" class="nav-link">Testimonials</a>
            </li>
            <li class="nav-item">
              <a href="#agents" class="nav-link">Agents</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text justify-content-center align-items-center"
        >
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center w-100">
              <h1 class="mb-4 allison-regular">
                <div class="title">Affinity Homes</div>
                <span style="font-family: Jost; font-size: 16px"
                  >For your valued property listings</span
                >
              </h1>
              <p>
                <a href="#" class="btn btn-primary py-3 px-4"
                  >Search Properties</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel">
            <span class="ion-ios-arrow-round-down"></span>
          </div>
        </a>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Location</label>
                      <div class="form-field">
                        <div class="icon">
                          <span class="ion-ios-search"></span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="City/Locality Name"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Property Type</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">Type</option>
                            <option value="">Commercial</option>
                            <option value="">- Office</option>
                            <option value="">Residential</option>
                            <option value="">Villa</option>
                            <option value="">Condominium</option>
                            <option value="">Apartment</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Property Status</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">Type</option>
                            <option value="">Rent</option>
                            <option value="">Sale</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Price Limit</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">Kes 5,000</option>
                            <option value="">Kes 10,000</option>
                            <option value="">Kes 50,000</option>
                            <option value="">Kes 100,000</option>
                            <option value="">Kes 200,000</option>
                            <option value="">Kes 300,000</option>
                            <option value="">Kes 400,000</option>
                            <option value="">Kes 500,000</option>
                            <option value="">Kes 600,000</option>
                            <option value="">Kes 700,000</option>
                            <option value="">Kes 800,000</option>
                            <option value="">Kes 900,000</option>
                            <option value="">Kes 1,000,000</option>
                            <option value="">Kes 2,000,000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input
                          type="submit"
                          value="Search Property"
                          class="form-control btn btn-primary"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="properties" class="ftco-section goto-here ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Our Properties</span>
            <h2 class="mb-2">Exclusive Properties Just For You</h2>
          </div>
        </div>
        <div class="row">
          <?php
            $properties = ChainPDO("SELECT * FROM properties WHERE visible = 1 ORDER BY priority")->fetchAll();

            foreach ($properties as $property) {
              $id = $property['id'];
              $title = $property['title'];
              $location = $property['location'];
              $size = $property['size'];
              $type = $property['type'];
              $photo = $property['photo'];
              $gallery = $property['gallery'] ? json_decode($property['gallery']) : [];
              $sales_cost = $property['sales_cost'];
              $rental_cost = $property['rental_cost'];

              $images = [];

              foreach($gallery as $image) {
                array_push($images, ['href' => $image, 'type' => 'image']);
              }

              ?>
                <div class="col-md-4">
                  <div class="property-wrap ftco-animate">
                    <div
                      class="img d-flex align-items-center justify-content-center"
                      style="background-image: url(<?=$photo;?>)"
                    >
                      <?php
                        if ($type === 'Sale') {
                          ?>
                            <div class="ribbon ribbon-top-right"><span>ON SALE</span></div>
                          <?php
                        }
                      ?>

                      <!-- <div class="box">
                      <span class="wdp-ribbon wdp-ribbon-two">Sale</span>
                      </div>

                      <div class="box">
                      <span class="wdp-ribbon wdp-ribbon-three">Sale</span>
                      </div>

                      <div class="box">
                        <span class="wdp-ribbon wdp-ribbon-four">Sale</span>
                      </div>

                      <div class="box">
                      <span class="wdp-ribbon wdp-ribbon-five">Sale</span>
                      </div>

                      <div class="box">
                        <span class="wdp-ribbon wdp-ribbon-six"><span class="wdp-ribbon-inner-wrap"><span class="wdp-ribbon-border"></span><span class="wdp-ribbon-text">Sale</span></span>
                      </div> -->

                      <div
                        id="openLB_"
                        href="##"
                        title="<?=$title;?>"
                        data-gallery="<?=$id;?>"
                        class="glightbox preview-link icon d-flex align-items-center justify-content-center btn-custom"
                        onclick='GLightbox({ elements: <?=json_encode($images);?> }).open();'
                      >
                        <span class="ion-ios-images"></span>
                      </div>
                      <div class="list-agent d-flex align-items-center">
                        <a
                          href="#agents"
                          class="agent-info d-flex align-items-center"
                        >
                          <div
                            class="img-2 rounded-circle"
                            style="background-image: url(images/gladys.jpg)"
                          ></div>
                          <h3 class="mb-0 ml-2">Key Agent</h3><br/>
                        </a>
                      </div>
                    </div>  

                    <div class="text">
                      <div class="btn btn-primary py-1 px-2 mb-2" style="border-radius: 10px">For <?=$type;?></div>

                      <h3 class="mb-0">
                        <a href="#properties"
                          ><?=$title;?></a
                        >
                      </h3>

                      <p class="price mb-2 mt-2">
                        <!-- <span class="old-price">Sale: Kes 46,000,000</span
                        > -->
                        <?php
                          if ($type === 'Sale') {
                            ?>
                              <span class="orig-price">Kes <?=number_format($sales_cost);?></span>
                            <?php
                          } else if ($type === 'Rent') {
                            ?>
                              <span class="orig-price">Kes <?=number_format($rental_cost);?><small>/month</small></span>
                            <?php
                          } else {
                            ?>
                              <span class="orig-price">Sale: Kes <?=number_format($sales_cost);?></span>
                              <br />
                              <span class="orig-price">Rent: Kes <?=number_format($rental_cost);?><small>/month</small></span>
                            <?php
                          }
                        ?>
                      </p>

                      <span class="location d-inline-block mb-3"
                        ><i class="ion-ios-pin mr-2"></i><?=$location;?></span
                      >
                      <ul class="property_list">
                        <!-- <li><span class="flaticon-bed"></span>2</li>
                        <li><span class="flaticon-bathtub"></span>1</li> -->
                        <?php
                          if ($size) {
                            ?>
                              <li><span class="flaticon-floor-plan"></span><?=$size;?></li>
                            <?php
                          }
                        ?>
                      </ul>

                      <div class="d-flex align-content-center">
                        <div class="avatar-group">
                          <?php
                            foreach($gallery as $key => $image) {
                              $key++;
                              ?>
                                <div class="avatar" onclick='GLightbox({ elements: <?=json_encode($images);?> }).open().goToSlide(3)'>
                                  <span class="avatar-name">Image <?=$key;?></span>
                                  <img src="<?=$image;?>" alt="Image">
                                </div>
                              <?php
                            }
                          ?>
                        </div>

                        <div style="flex: 1"></div>

                        <div class="align-content-center justify-content-end">
                          <a href="#contact" class="btn btn-primary py-2 px-3" style="border-radius: 10px; background: transparent !important; color: #b07032 !important">Enquire <span class="fa fa-external-link"></span></a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>

    <section id="services" class="ftco-section ftco-fullwidth">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Services</span>
            <h2 class="mb-2">Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper align-items-stretch">
          <div
            class="one-half mb-md-0 mb-4 img d-flex align-self-stretch"
            style="background-image: url(images/about_1.jpg)"
          ></div>
          <div
            class="one-half half-text d-flex justify-content-end align-items-center"
          >
            <div class="text-inner pl-md-5">
              <div class="row d-flex">
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="flaticon-piggy-bank"></span>
                    </div>
                    <div class="media-body pl-4">
                      <h3>Integrity</h3>
                      <p>
                        We act with honesty, transparency, and accountability in
                        everything we do.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="flaticon-wallet"></span>
                    </div>
                    <div class="media-body pl-4">
                      <h3>Community</h3>
                      <p>
                        We are deeply invested in the communities we serve and
                        aim to make a positive impact.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="flaticon-file"></span>
                    </div>
                    <div class="media-body pl-4">
                      <h3>Excellence</h3>
                      <p>
                        We strive for the highest standards in service,
                        communication, and results.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="flaticon-locked"></span>
                    </div>
                    <div class="media-body pl-4">
                      <h3>Innovation</h3>
                      <p>
                        We embrace technology and new ideas to improve the real
                        estate experience.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <section
        class="ftco-counter ftco-section ftco-no-pb img"
        id="section-counter"
      >
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate"
            >
              <div class="block-18">
                <div class="text text-border d-flex align-items-center">
                  <strong class="number" data-number="1">0</strong>
                  <span>City</span>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate"
            >
              <div class="block-18">
                <div class="text text-border d-flex align-items-center">
                  <strong class="number" data-number="6">0</strong>
                  <span>Total <br />Properties</span>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate"
            >
              <div class="block-18">
                <div class="text text-border d-flex align-items-center">
                  <strong class="number" data-number="14">0</strong>
                  <span>Average <br />Customers</span>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate"
            >
              <div class="block-18">
                <div class="text d-flex align-items-center">
                  <strong class="number" data-number="1">0</strong>
                  <span>Total <br />Branches</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section ftco-no-pb">
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 img img-3 d-flex justify-content-center align-items-center"
              style="
                border-radius: 20px;
                border-bottom-left-radius: 200px;
                background-image: url(images/why.jpg);
              "
            ></div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
              <div class="heading-section">
                <h2 class="mb-4">Why should I trust Affinity Homes?</h2>

                <p>
                  Advising national and international commercial and residential
                  developers, investors, owners and occupiers we fulfill a wide
                  range of real estate needs, including: property management,
                  agency, valuation, project management, feasibility and
                  research-led consultancy.
                </p>
                <p>
                  With expert knowledge of factors affecting national and
                  international property markets, our goal is to improve
                  operations, maximise returns on investment and add value
                  throughout working partnerships.
                </p>
                <p>
                  <a href="#about" class="btn btn-primary">Find Properties</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px">Our Mission</h3>
            <p>
              To empower individuals and families by providing exceptional real
              estate solutions with integrity, innovation, and personalized
              service—helping our clients find not just a property, but a place
              to call home.
            </p>
          </div>
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px">Our Vision</h3>
            <p>
              To be the most trusted and forward-thinking real estate company,
              redefining the experience of buying, selling, and investing in
              property by combining local expertise with world-class service and
              cutting-edge technology.
            </p>
          </div>
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px">Our Values</h3>
            <p>
              Integrity – We act with honesty, transparency, and accountability
              in everything we do. Excellence – We strive for the highest
              standards in service, communication, and results.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="listings" class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Find Properties</span>
            <h2 class="mb-2">Find Properties in Nairobi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/kilimani.jpg)"
            >
              <div class="location">
                <span class="rounded">Kilimani, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">2 Property Listings</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/kileleshwa.jpg)"
            >
              <div class="location">
                <span class="rounded">Kileleshwa, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">5 Property Listings</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/lavington.jpg)"
            >
              <div class="location">
                <span class="rounded">Lavington, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">2 Property Listings</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/mombasaroad.jpg)"
            >
              <div class="location">
                <span class="rounded">Mombasa Road, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">3 Property Listings</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/kitisuru.jpg)"
            >
              <div class="location">
                <span class="rounded">Kitisuru, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">2 Property Listings</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="listing-wrap img rounded d-flex align-items-end"
              style="background-image: url(images/westlands.jpg)"
            >
              <div class="location">
                <span class="rounded">Westlands, Nairobi</span>
              </div>
              <div class="text">
                <h3><a href="#listings">1 Property Listing</a></h3>
                <a href="#listings" class="btn-link"
                  >See All Listing
                  <span class="ion-ios-arrow-round-forward"></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonials</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      Really enjoyed my stay here. The place is literally as
                      described. Would highly recommend. Definitely staying
                      again when back in Kenya.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_1.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Ann</p>
                        <span class="position">Client</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      Gladys was very responsive to all my questions and her
                      place was exactly as described. I loved investing in the 1 bedroom apartment at The Curve.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_2.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Kamunge</p>
                        <span class="position">Client</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      We had a great time here, very nice place and Anthony
                      helped us when we started experiencing issues with the
                      WiFi - great customer service.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_3.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Njoro</p>
                        <span class="position">Client</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      Highly recommended - lovely 1 bedroom place in Nairobi in
                      an excellent, safe location with a lovely and responsive
                      host. 10/10.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_4.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Markus</p>
                        <span class="position">Client</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      Hosts were very communicative and understanding, place
                      looked just like the pictures and is very cozy.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_5.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Ayieko</p>
                        <span class="position">Client</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="agents" class="ftco-section ftco-agent ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center pb-2">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Agents</span>
            <h2 class="mb-4">Our Agents</h2>
          </div>
        </div>
        <div class="row" style="justify-content: center">
          <div class="col-md-3 ftco-animate">
            <div class="agent">
              <div class="img">
                <img src="images/gladys.jpg" class="img-fluid" alt="Agent" />
              </div>
              <div class="desc">
                <h3><a href="#agents">Gladys Karanja</a></h3>
                <p class="h-info">
                  <span class="details">Founder & Key Agent</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a
                  href="#blog"
                  class="block-20 img"
                  style="background-image: url('images/image_1.jpg')"
                >
                </a>
                <h3 class="heading">
                  <a href="#blog"
                    >Challenges in the Kenyan Real Estate Market from an agent's
                    view</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#blog">January 01, 2025</a></div>
                  <div><a href="#blog">Admin</a></div>
                  <div>
                    <a href="#blog" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a
                  href="#blog"
                  class="block-20 img"
                  style="background-image: url('images/image_2.jpg')"
                >
                </a>
                <h3 class="heading">
                  <a href="#blog"
                    >What Makes Real Estate a Smart Investment in Kenya among
                    others</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#blog">February 01, 2025</a></div>
                  <div><a href="#blog">Admin</a></div>
                  <div>
                    <a href="#blog" class="meta-chat"
                      ><span class="icon-chat"></span> 6</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a
                  href="#blog"
                  class="block-20 img"
                  style="background-image: url('images/image_3.jpg')"
                >
                </a>
                <h3 class="heading">
                  <a href="#blog"
                    >Understanding Kenya’s Economy and Its Real Estate Market</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#blog">March 01, 2025</a></div>
                  <div><a href="#blog">Admin</a></div>
                  <div>
                    <a href="#blog" class="meta-chat"
                      ><span class="icon-chat"></span> 0</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a
                  href="#blog"
                  class="block-20 img"
                  style="background-image: url('images/image_4.jpg')"
                >
                </a>
                <h3 class="heading">
                  <a href="#blog"
                    >Why Real Estate is a Smart Investment in a Fluctuating
                    Economy</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#blog">April 02, 2025</a></div>
                  <div><a href="#blog">Admin</a></div>
                  <div>
                    <a href="#blog" class="meta-chat"
                      ><span class="icon-chat"></span> 0</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="ftco-section contact-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact Us</span>
            <h2>Reach us through the channels below</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex contact-info justify-content-center">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4 text-center py-4">
                <div
                  class="icon mb-3 d-flex align-items-center justify-content-center"
                >
                  <span class="icon-map-o"></span>
                </div>
                <p>
                  <span>Address:</span> Lavington, Near the Mall Nairobi, Kenya
                </p>
              </div>
              <div class="col-md-4 text-center py-4">
                <div
                  class="icon mb-3 d-flex align-items-center justify-content-center"
                >
                  <span class="icon-mobile-phone"></span>
                </div>
                <p>
                  <span>Phone:</span>
                  <a href="tel://+254725037416">+254 725 037416</a>
                </p>
              </div>
              <div class="col-md-4 text-center py-4">
                <div
                  class="icon mb-3 d-flex align-items-center justify-content-center"
                >
                  <span class="icon-envelope-o"></span>
                </div>
                <p>
                  <span>Email:</span>
                  <a href="mailto:info@affinityhomes.co.ke"
                    >info@affinityhomes.co.ke</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 align-items-stretch d-flex">
            <form
              action="api/contact.php"
              method="post"
              class="bg-light p-5 contact-form"
              style="background: #f9f3ed !important"
            >
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                  name="name"
                  id="name-field"
                  required=""
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Email"
                  name="email"
                  id="email-field"
                  required=""
                />
              </div>
              <div class="form-group">
                <input 
                  type="text" 
                  class="form-control" 
                  placeholder="Subject" 
                  name="subject"
                  id="subject-field"
                  required=""/>
              </div>
              <div class="form-group">
                <textarea
                  id=""
                  cols="30"
                  rows="7"
                  class="form-control"
                  placeholder="Message"
                  name="message"
                  id="message-field"
                  required=""
                ></textarea>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Send Message"
                  class="btn btn-primary py-3 px-5"
                />
              </div>
            </form>
          </div>
          <div class="col-md-6 align-items-stretch d-flex">
            <div id="map" class="bg-white border">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1614.6568216514063!2d36.766678406242136!3d-1.283375130327257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xfb369318e22d9241!2sPQ88%2BMF2%2C%20Nairobi%2C%20Kenya!5e1!3m2!1sen!2sus!4v1748907123307!5m2!1sen!2sus"
                frameborder="0"
                style="border: 0; width: 100%; height: 100%"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Affinity Homes</h2>
              <p>
                For your valued property listings to improve operations,
                maximise returns on investment and add value throughout working
                partnerships.
              </p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Search
                    Properties</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>For
                    Agents</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Reviews</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>FAQs</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Our
                    Story</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Meet the
                    team</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Careers</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>About Us</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Press</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Contact</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="icon-long-arrow-right mr-2"></span>Careers</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >Lavington, Near the Mall Nairobi, Kenya</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+254 725 037416</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope pr-4"></span
                      ><span class="text">info@affinityhomes.co.ke</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              Designed by Musasoft Labs
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/main.js"></script>
    <script type="application/javascript">
      function openLightBox(elements) { GLightbox({ elements }).open(); }
    </script>
  </body>
</html>
