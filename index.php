<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <title>houzeo</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- css group start -->
  <?php include_once 'view/include_css.html'; ?>
  <!-- css group end -->
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <!-- header start -->
  <?php include_once 'view/header.html'; ?>
  <!-- header end -->

  <main class="header-height">
    <section class="lyt-section typ-main-bar">
      <div class="container">
        <div class="bs-filter-box-wrapper">
          <div class="search-box">
            <div class="search-box-wrapper">
              <input type="search" class="search-input">

              <div class="button-wrapper">
                <div class="clear-icon">
                  <span class="icon icon-cross"></span>
                </div>
                <div class="search-icon">
                  <img src="assets/images/search.svg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="filter-box-icon-mob">
            <img src="assets/images/filter-icon.svg" class="img-fluid" alt="filter-icon" loading="lazy">
            <div class="number">3</div>
          </div>
          <div class="for-sell-box for-sell-box-main">
            <select class="select-field">
              <option value="" selected disabled>Select Type</option>
              <option value="for-sale">For Sale</option>
              <option value="for-rent">For Rent</option>
              <option value="sold">Sold</option>
              <option value="under-offer">Under Offer</option>
              <option value="foreclosure">Foreclosure</option>
              <option value="coming-soon">Coming Soon</option>
            </select>

          </div>
          <div class="for-sell-box typ-price-box">
            <select class="select-field">
              <option value="" selected disabled>Price</option>
              <option value="">100000</option>
              <option value="">2000000</option>
              <option value="">3000000</option>
              <option value="">4000000</option>
            </select>
          </div>
          <div class="for-sell-box typ-bed-box">
            <select class="select-field">
              <option value="" selected disabled>Beds & Baths</option>
              <option value="">2 BHK</option>
              <option value="">3 BHK</option>
              <option value="">4 BHK</option>
            </select>
          </div>
          <div class="for-sell-box typ-property-box">
            <select class="select-field">
              <option value="" selected disabled>Property Type</option>
              <option value="">Commercial</option>
              <option value="">Residential</option>
            </select>
          </div>
          <div class="filter-box">
            <button>
              <span class="icon icon-filter"></span>
              Filters
            </button>
          </div>
          <div class="saved-box">
            <button>
              <span class="icon icon-pencil"></span>
              Saved
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="overflow-hidden lyt-section typ-first-section">
      <div class="custom-container">
        <div class="bs-flex-box">
          <div class="leftBox">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d65587682.53044921!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1710000000000!5m2!1sen!2s"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>


          <div class="rightBox">
            <div class="title">Austin, TX real estate & homes for sale</div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="count">2,010 Homes</div>

              <div class="sortingBox">
                <p class="sortby">Sort by:</p>
                <div class="sorting-select">
                  <select class="select-field">
  <option value="" selected disabled>Newest Listings</option>
  <option value="oldest">Oldest Listings</option>
  <option value="priceLowHigh">Price: Low to High</option>
  <option value="priceHighLow">Price: High to Low</option>
  <option value="areaHighLow">Area: High to Low</option>
  <option value="areaLowHigh">Area: Low to High</option>
  <option value="mostViewed">Most Viewed</option>
  <option value="featured">Featured First</option>
</select>

                </div>
              </div>
            </div>
            <div class="bs-grid-box">
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle typred"></div>
                      House For rent
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Sotheby's International Realty
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
              <div class="bs-card-box">
                <div class="img-box">
                  <!-- Swiper container -->
                  <div class="bs-swiper">
                    <div class="swiper card-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/1.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/2.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/3.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/images/card-img/4.jpg" class="img-fluid" alt="property-img" loading="lazy">
                        </div>
                      </div>

                      <!-- Navigation buttons -->
                      <div class="navigation-btn">
                        <div class="swiper-button-prev custom-prev">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                        <div class="swiper-button-next custom-next">
                          <span class="icon icon-next-arrow"></span>
                        </div>
                      </div>


                      <!-- Pagination -->
                      <div class="swiper-pagination card-pagination"></div>
                    </div>
                  </div>

                  <div class="content-wrapper">
                    <div class="days-tag">6 days on Houzeo</div>
                    <div class="heart">
                      <img src="assets/images/heart.svg" class="img-fluid" alt="heart-icon" loading="lazy">
                    </div>
                  </div>

                  <div class="card-logo">
                    <img src="assets/images/card-logo.jpg" class="img-fluid" alt="logo" loading="lazy">
                  </div>
                </div>

                <div class="content-box">
                  <div class="view-box">
                    <div class="view-tag">
                      <div class="cirle"></div>
                      House For Sale
                    </div>
                    <div class="icon-box">
                      <span class="icon icon-eye"></span>
                      <div class="text">2.3K</div>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="price">$3,349,000</div>
                    <div class="configration">
                      <div class="beds">
                        <span>4</span>
                        Beds
                      </div>
                      <div class="baths">
                        <span>3</span>
                        Baths
                      </div>
                      <div class="fit">
                        <span>998</span>
                        sqft
                      </div>
                    </div>
                  </div>
                  <div class="name">
                    <span>2856 Meadow Park Ave,</span> Henderson, NV 89052
                  </div>
                  <div class="address">
                    Nashville (Real Tracs Mid) MLS-TN as distributed by MLS GRID
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div id="preloader">
      <div class="loader"></div>
    </div>
  </main>

  <!-- footer start -->
  <?php include_once 'view/footer.html'?>
  <!-- footer end -->

  <!-- js group start -->
  <?php include_once 'view/include_js.html'?>
  <!-- js group end -->
</body>

</html>