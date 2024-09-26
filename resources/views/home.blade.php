@extends('frontend.layout.main')

@section('main-section')

<div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->


    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero-header bg-white" style="background:url(assets/img/banner.jpg)no-repeat;"
      data-overlay="5">
      <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
          <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
            <div class="position-relative text-center mb-5">
              <h1>Starts Your Trip with <span class="position-relative z-4">GeoTrip<span
                    class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
                    <svg width="185px" height="23px" viewBox="0 0 445.5 23">
                      <path class="fill-white opacity-7"
                        d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
                      </path>
                    </svg>
                  </span></span></h1>
              <p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
                explore beautiful destinations.</p>
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="search-wrap bg-white rounded-3 p-3">
              <div class="search-upper">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                  <div class="flx-start mb-sm-0 mb-2">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="trip" id="return" value="option1" checked>
                      <label class="form-check-label" for="return">Return</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="trip" id="oneway" value="option2">
                      <label class="form-check-label" for="oneway">One Way</label>
                    </div>
                  </div>
                  <div class="flx-end d-flex align-items-center flex-wrap">
                    <div class="px-sm-2 pb-3 pt-0 ps-0 mob-full">
                      <div class="booking-form__input guests-input">
                        <i class="fa-solid fa-user-clock text-muted me-2"></i><button name="guests-btn"
                          id="guests-input-btn">1
                          Guest</button>
                        <div class="guests-input__options" id="guests-input-options">
                          <div>
                            <span class="guests-input__ctrl minus" id="adults-subs-btn"><i
                                class="fa-solid fa-minus"></i></span>
                            <span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
                            <span class="guests-input__ctrl plus" id="adults-add-btn"><i
                                class="fa-solid fa-plus"></i></span>
                          </div>
                          <div>
                            <span class="guests-input__ctrl minus" id="children-subs-btn"><i
                                class="fa-solid fa-minus"></i></span>
                            <span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
                            <span class="guests-input__ctrl plus" id="children-add-btn"><i
                                class="fa-solid fa-plus"></i></span>
                          </div>
                          <div>
                            <span class="guests-input__ctrl minus" id="room-subs-btn"><i
                                class="fa-solid fa-minus"></i></span>
                            <span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
                            <span class="guests-input__ctrl plus" id="room-add-btn"><i
                                class="fa-solid fa-plus"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ps-1 pb-3 pt-0 mob-full">
                      <div class="dropdowns">
                        <div class="selections">
                          <i class="fa-solid fa-basket-shopping text-muted me-2"></i><span
                            class="selected">Economy</span>
                          <div class="caret"></div>
                        </div>
                        <ul class="menu">
                          <li class="active">Economy</li>
                          <li>Premium Economy</li>
                          <li>Premium Economy</li>
                          <li>Business/First</li>
                          <li>Business</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gx-lg-2 g-3">

                <div class="col-xl-6 col-lg-6 col-md-12">
                  <div class="row gy-3 gx-lg-2 gx-3">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                      <div class="form-group hdd-arrow mb-0">
                        <select class="leaving form-control fw-bold">
                          <option value="">Select</option>
                          <option value="ny">New York</option>
                          <option value="sd">San Diego</option>
                          <option value="sj">San Jose</option>
                          <option value="ph">Philadelphia</option>
                          <option value="nl">Nashville</option>
                          <option value="sf">San Francisco</option>
                          <option value="hu">Houston</option>
                          <option value="sa">San Antonio</option>
                        </select>
                      </div>
                      <div class="btn-flip-icon mt-md-0">
                        <button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <div class="form-groupp hdd-arrow mb-0">
                        <select class="goingto form-control fw-bold">
                          <option value="">Select</option>
                          <option value="lv">Las Vegas</option>
                          <option value="la">Los Angeles</option>
                          <option value="kc">Kansas City</option>
                          <option value="no">New Orleans</option>
                          <option value="kc">Jacksonville</option>
                          <option value="lb">Long Beach</option>
                          <option value="cl">Columbus</option>
                          <option value="cn">Canada</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="row gy-3 gx-lg-2 gx-3">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group mb-0">
                        <input class="form-control fw-bold choosedate" type="text" placeholder="Departure.."
                          readonly="readonly">
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group mb-0">
                        <input class="form-control fw-bold choosedate" type="text" placeholder="Return.."
                          readonly="readonly">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                  <div class="form-group mb-0">
                    <button type="button" class="btn btn-primary full-width fw-medium"><i
                        class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- </row> -->

      </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->


    <!-- ============================ Features Start ================================== -->
    <section class="border-bottom">
      <div class="container">
        <div class="row align-items-center justify-content-between g-4">

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-sack-dollar fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Easy Booking</h4>
                <p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
                  Occasionally the first Oration against Catiline.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-umbrella-beach fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Best Destinations</h4>
                <p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
                  Occasionally the first Oration against Catiline.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-person-walking-luggage fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Travel Guides</h4>
                <p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
                  Occasionally the first Oration against Catiline.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-headset fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Friendly Support</h4>
                <p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
                  Occasionally the first Oration against Catiline.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ============================ Features End ================================== -->


    <!-- ============================ Best Locations Design Start ================================== -->
    <section>
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
            <div class="secHeading-wrap text-center mb-5">
              <h2>Explore Popular Destination</h2>
              <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center gy-4 gx-3">

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-8.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>New York</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">10 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">5 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-7.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>Las Vegas</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">06 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">14 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-1.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>San Antonio</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">09 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">16 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-2.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>Houston</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">07 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">18 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-3.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>San Francisco</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">4 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">12 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-4.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>Nashville</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">16 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">7 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-5.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>Philadelphia</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">14 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">10 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="destination-blocks bg-white p-2 rounded border br-dashed h-100">
              <div class="destination-blocks-pics p-1">
                <a href="#"><img src="assets/img/city/c-6.png" class="img-fluid rounded" alt=""></a>
              </div>
              <div class="destination-blocks-captions">
                <div class="touritem-flexxer text-center p-3">
                  <h4 class="city fs-5 m-0 fw-bold">
                    <span>San Diego</span>
                  </h4>
                  <p class="detail ellipsis-container m-0">
                    <span class="ellipsis-item__normal">12 Destinations</span>
                    <span class="separate ellipsis-item__normal"></span>
                    <span class="ellipsis-item">32 Hotels</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ============================ Best Locations Design Start ================================== -->


    <!-- ============================ Popular Routes Design Start ================================== -->
    <section class="gray-simple">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
            <div class="secHeading-wrap text-center mb-5">
              <h2>Explore Popular Routes</h2>
              <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center gy-4 gx-3">

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
                    <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                      <span class="svg-icon text-light svg-icon-2hx me-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="currentColor"></path>
                          <path
                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                            fill="currentColor"></path>
                        </svg>
                      </span>Featured
                    </div>
                  </div>
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-1.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>New York</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Los Angeles</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-2.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>San Diego</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>San Jose</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
                    <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                      <span class="svg-icon text-light svg-icon-2hx me-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="currentColor"></path>
                          <path
                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                            fill="currentColor"></path>
                        </svg>
                      </span>Featured
                    </div>
                  </div>
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>Dallas</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Philadelphia</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-4.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>Denver</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Nashville</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-5.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>Chicago</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>San Francisco</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
                    <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                      <span class="svg-icon text-light svg-icon-2hx me-1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="currentColor"></path>
                          <path
                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                            fill="currentColor"></path>
                        </svg>
                      </span>Featured
                    </div>
                  </div>
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-10.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>Houston</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Los Angeles</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-9.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>San Antonio</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Columbus</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="pop-touritem">
              <a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
                <div class="flight-thumb-wrapper">
                  <div class="popFlights-item-overHidden">
                    <img src="assets/img/destination/tr-6.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="touritem-middle position-relative p-3">
                  <div class="touritem-flexxer">
                    <h4 class="city fs-6 m-0 fw-bold">
                      <span>Los Angeles</span>
                      <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                            fill="currentColor" />
                          <path opacity="0.3"
                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <span>Canada</span>
                    </h4>
                    <p class="detail ellipsis-container">
                      <span class="ellipsis-item__normal">Round-trip</span>
                      <span class="separate ellipsis-item__normal"></span>
                      <span class="ellipsis-item">3 days</span>
                    </p>
                  </div>
                  <div class="flight-foots">
                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>

        <div class="row align-items-center justify-content-center">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="text-center position-relative mt-5">
              <button type="button" class="btn btn-light-primary fw-medium px-5">Explore More<i
                  class="fa-solid fa-arrow-trend-up ms-2"></i></button>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ============================ Popular Routes Design Start ================================== -->


    <!-- ============================ Flexible features End ================================== -->
    <section>
      <div class="container">
        <div class="row align-items-center justify-content-between">

          <div class="col-xl-5 col-lg-5 col-md-12 position-relative pe-xl-5 pe-lg-4 pe-md-4 pb-xl-5 pb-lg-4 pb-md-4">
            <div class="position-relative mb-lg-0 mb-4">
              <img src="assets/img/img-3.jpg" class="img-fluid rounded-3 position-relative z-1" alt="">
              <div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-5">
                <div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3 z-2">

                  <!-- Avatar group -->
                  <div class="me-4">
                    <h6 class="fw-normal">Client</h6>
                    <!-- Avatar group -->
                    <ul class="avatar-group mb-0">
                      <li class="avatar avatar-md">
                        <img class="avatar-img circle" src="assets/img/team-1.jpg" alt="avatar">
                      </li>
                      <li class="avatar avatar-md">
                        <img class="avatar-img circle" src="assets/img/team-2.jpg" alt="avatar">
                      </li>
                      <li class="avatar avatar-md">
                        <img class="avatar-img circle" src="assets/img/team-3.jpg" alt="avatar">
                      </li>
                      <li class="avatar avatar-md">
                        <img class="avatar-img circle" src="assets/img/team-4.jpg" alt="avatar">
                      </li>
                      <li class="avatar avatar-md">
                        <div class="avatar-img circle bg-primary">
                          <span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <!-- Rating -->
                  <div>
                    <h6 class="fw-normal mb-3">Rating</h6>
                    <h6 class="m-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                  </div>
                </div>
              </div>
            </div>
            <figure class="position-absolute bottom-0 end-0 d-none d-md-block mb-n5 me-n4">
              <svg height="400" class="fill-primary opacity-25" viewBox="0 0 340 340">
                <circle cx="194.2" cy="2.2" r="2.2"></circle>
                <circle cx="2.2" cy="2.2" r="2.2"></circle>
                <circle cx="218.2" cy="2.2" r="2.2"></circle>
                <circle cx="26.2" cy="2.2" r="2.2"></circle>
                <circle cx="242.2" cy="2.2" r="2.2"></circle>
                <circle cx="50.2" cy="2.2" r="2.2"></circle>
                <circle cx="266.2" cy="2.2" r="2.2"></circle>
                <circle cx="74.2" cy="2.2" r="2.2"></circle>
                <circle cx="290.2" cy="2.2" r="2.2"></circle>
                <circle cx="98.2" cy="2.2" r="2.2"></circle>
                <circle cx="314.2" cy="2.2" r="2.2"></circle>
                <circle cx="122.2" cy="2.2" r="2.2"></circle>
                <circle cx="338.2" cy="2.2" r="2.2"></circle>
                <circle cx="146.2" cy="2.2" r="2.2"></circle>
                <circle cx="170.2" cy="2.2" r="2.2"></circle>
                <circle cx="194.2" cy="26.2" r="2.2"></circle>
                <circle cx="2.2" cy="26.2" r="2.2"></circle>
                <circle cx="218.2" cy="26.2" r="2.2"></circle>
                <circle cx="26.2" cy="26.2" r="2.2"></circle>
                <circle cx="242.2" cy="26.2" r="2.2"></circle>
                <circle cx="50.2" cy="26.2" r="2.2"></circle>
                <circle cx="266.2" cy="26.2" r="2.2"></circle>
                <circle cx="74.2" cy="26.2" r="2.2"></circle>
                <circle cx="290.2" cy="26.2" r="2.2"></circle>
                <circle cx="98.2" cy="26.2" r="2.2"></circle>
                <circle cx="314.2" cy="26.2" r="2.2"></circle>
                <circle cx="122.2" cy="26.2" r="2.2"></circle>
                <circle cx="338.2" cy="26.2" r="2.2"></circle>
                <circle cx="146.2" cy="26.2" r="2.2"></circle>
                <circle cx="170.2" cy="26.2" r="2.2"></circle>
                <circle cx="194.2" cy="50.2" r="2.2"></circle>
                <circle cx="2.2" cy="50.2" r="2.2"></circle>
                <circle cx="218.2" cy="50.2" r="2.2"></circle>
                <circle cx="26.2" cy="50.2" r="2.2"></circle>
                <circle cx="242.2" cy="50.2" r="2.2"></circle>
                <circle cx="50.2" cy="50.2" r="2.2"></circle>
                <circle cx="266.2" cy="50.2" r="2.2"></circle>
                <circle cx="74.2" cy="50.2" r="2.2"></circle>
                <circle cx="290.2" cy="50.2" r="2.2"></circle>
                <circle cx="98.2" cy="50.2" r="2.2"></circle>
                <circle cx="314.2" cy="50.2" r="2.2"></circle>
                <circle cx="122.2" cy="50.2" r="2.2"></circle>
                <circle cx="338.2" cy="50.2" r="2.2"></circle>
                <circle cx="146.2" cy="50.2" r="2.2"></circle>
                <circle cx="170.2" cy="50.2" r="2.2"></circle>
                <circle cx="194.2" cy="74.2" r="2.2"></circle>
                <circle cx="2.2" cy="74.2" r="2.2"></circle>
                <circle cx="218.2" cy="74.2" r="2.2"></circle>
                <circle cx="26.2" cy="74.2" r="2.2"></circle>
                <circle cx="242.2" cy="74.2" r="2.2"></circle>
                <circle cx="50.2" cy="74.2" r="2.2"></circle>
                <circle cx="266.2" cy="74.2" r="2.2"></circle>
                <circle cx="74.2" cy="74.2" r="2.2"></circle>
                <circle cx="290.2" cy="74.2" r="2.2"></circle>
                <circle cx="98.2" cy="74.2" r="2.2"></circle>
                <circle cx="314.2" cy="74.2" r="2.2"></circle>
                <circle cx="122.2" cy="74.2" r="2.2"></circle>
                <circle cx="338.2" cy="74.2" r="2.2"></circle>
                <circle cx="146.2" cy="74.2" r="2.2"></circle>
                <circle cx="170.2" cy="74.2" r="2.2"></circle>
                <circle cx="194.2" cy="98.2" r="2.2"></circle>
                <circle cx="2.2" cy="98.2" r="2.2"></circle>
                <circle cx="218.2" cy="98.2" r="2.2"></circle>
                <circle cx="26.2" cy="98.2" r="2.2"></circle>
                <circle cx="242.2" cy="98.2" r="2.2"></circle>
                <circle cx="50.2" cy="98.2" r="2.2"></circle>
                <circle cx="266.2" cy="98.2" r="2.2"></circle>
                <circle cx="74.2" cy="98.2" r="2.2"></circle>
                <circle cx="290.2" cy="98.2" r="2.2"></circle>
                <circle cx="98.2" cy="98.2" r="2.2"></circle>
                <circle cx="314.2" cy="98.2" r="2.2"></circle>
                <circle cx="122.2" cy="98.2" r="2.2"></circle>
                <circle cx="338.2" cy="98.2" r="2.2"></circle>
                <circle cx="146.2" cy="98.2" r="2.2"></circle>
                <circle cx="170.2" cy="98.2" r="2.2"></circle>
                <circle cx="194.2" cy="122.2" r="2.2"></circle>
                <circle cx="2.2" cy="122.2" r="2.2"></circle>
                <circle cx="218.2" cy="122.2" r="2.2"></circle>
                <circle cx="26.2" cy="122.2" r="2.2"></circle>
                <circle cx="242.2" cy="122.2" r="2.2"></circle>
                <circle cx="50.2" cy="122.2" r="2.2"></circle>
                <circle cx="266.2" cy="122.2" r="2.2"></circle>
                <circle cx="74.2" cy="122.2" r="2.2"></circle>
                <circle cx="290.2" cy="122.2" r="2.2"></circle>
                <circle cx="98.2" cy="122.2" r="2.2"></circle>
                <circle cx="314.2" cy="122.2" r="2.2"></circle>
                <circle cx="122.2" cy="122.2" r="2.2"></circle>
                <circle cx="338.2" cy="122.2" r="2.2"></circle>
                <circle cx="146.2" cy="122.2" r="2.2"></circle>
                <circle cx="170.2" cy="122.2" r="2.2"></circle>
                <circle cx="194.2" cy="146.2" r="2.2"></circle>
                <circle cx="2.2" cy="146.2" r="2.2"></circle>
                <circle cx="218.2" cy="146.2" r="2.2"></circle>
                <circle cx="26.2" cy="146.2" r="2.2"></circle>
                <circle cx="242.2" cy="146.2" r="2.2"></circle>
                <circle cx="50.2" cy="146.2" r="2.2"></circle>
                <circle cx="266.2" cy="146.2" r="2.2"></circle>
                <circle cx="74.2" cy="146.2" r="2.2"></circle>
                <circle cx="290.2" cy="146.2" r="2.2"></circle>
                <circle cx="98.2" cy="146.2" r="2.2"></circle>
                <circle cx="314.2" cy="146.2" r="2.2"></circle>
                <circle cx="122.2" cy="146.2" r="2.2"></circle>
                <circle cx="338.2" cy="146.2" r="2.2"></circle>
                <circle cx="146.2" cy="146.2" r="2.2"></circle>
                <circle cx="170.2" cy="146.2" r="2.2"></circle>
                <circle cx="194.2" cy="170.2" r="2.2"></circle>
                <circle cx="2.2" cy="170.2" r="2.2"></circle>
                <circle cx="218.2" cy="170.2" r="2.2"></circle>
                <circle cx="26.2" cy="170.2" r="2.2"></circle>
                <circle cx="242.2" cy="170.2" r="2.2"></circle>
                <circle cx="50.2" cy="170.2" r="2.2"></circle>
                <circle cx="266.2" cy="170.2" r="2.2"></circle>
                <circle cx="74.2" cy="170.2" r="2.2"></circle>
                <circle cx="290.2" cy="170.2" r="2.2"></circle>
                <circle cx="98.2" cy="170.2" r="2.2"></circle>
                <circle cx="314.2" cy="170.2" r="2.2"></circle>
                <circle cx="122.2" cy="170.2" r="2.2"></circle>
                <circle cx="338.2" cy="170.2" r="2.2"></circle>
                <circle cx="146.2" cy="170.2" r="2.2"></circle>
                <circle cx="170.2" cy="170.2" r="2.2"></circle>
                <circle cx="194.2" cy="194.2" r="2.2"></circle>
                <circle cx="2.2" cy="194.2" r="2.2"></circle>
                <circle cx="218.2" cy="194.2" r="2.2"></circle>
                <circle cx="26.2" cy="194.2" r="2.2"></circle>
                <circle cx="242.2" cy="194.2" r="2.2"></circle>
                <circle cx="50.2" cy="194.2" r="2.2"></circle>
                <circle cx="266.2" cy="194.2" r="2.2"></circle>
                <circle cx="74.2" cy="194.2" r="2.2"></circle>
                <circle cx="290.2" cy="194.2" r="2.2"></circle>
                <circle cx="98.2" cy="194.2" r="2.2"></circle>
                <circle cx="314.2" cy="194.2" r="2.2"></circle>
                <circle cx="122.2" cy="194.2" r="2.2"></circle>
                <circle cx="338.2" cy="194.2" r="2.2"></circle>
                <circle cx="146.2" cy="194.2" r="2.2"></circle>
                <circle cx="170.2" cy="194.2" r="2.2"></circle>
                <circle cx="194.2" cy="218.2" r="2.2"></circle>
                <circle cx="2.2" cy="218.2" r="2.2"></circle>
                <circle cx="218.2" cy="218.2" r="2.2"></circle>
                <circle cx="26.2" cy="218.2" r="2.2"></circle>
                <circle cx="242.2" cy="218.2" r="2.2"></circle>
                <circle cx="50.2" cy="218.2" r="2.2"></circle>
                <circle cx="266.2" cy="218.2" r="2.2"></circle>
                <circle cx="74.2" cy="218.2" r="2.2"></circle>
                <circle cx="290.2" cy="218.2" r="2.2"></circle>
                <circle cx="98.2" cy="218.2" r="2.2"></circle>
                <circle cx="314.2" cy="218.2" r="2.2"></circle>
                <circle cx="122.2" cy="218.2" r="2.2"></circle>
                <circle cx="338.2" cy="218.2" r="2.2"></circle>
                <circle cx="146.2" cy="218.2" r="2.2"></circle>
                <circle cx="170.2" cy="218.2" r="2.2"></circle>
                <circle cx="194.2" cy="242.2" r="2.2"></circle>
                <circle cx="2.2" cy="242.2" r="2.2"></circle>
                <circle cx="218.2" cy="242.2" r="2.2"></circle>
                <circle cx="26.2" cy="242.2" r="2.2"></circle>
                <circle cx="242.2" cy="242.2" r="2.2"></circle>
                <circle cx="50.2" cy="242.2" r="2.2"></circle>
                <circle cx="266.2" cy="242.2" r="2.2"></circle>
                <circle cx="74.2" cy="242.2" r="2.2"></circle>
                <circle cx="290.2" cy="242.2" r="2.2"></circle>
                <circle cx="98.2" cy="242.2" r="2.2"></circle>
                <circle cx="314.2" cy="242.2" r="2.2"></circle>
                <circle cx="122.2" cy="242.2" r="2.2"></circle>
                <circle cx="338.2" cy="242.2" r="2.2"></circle>
                <circle cx="146.2" cy="242.2" r="2.2"></circle>
                <circle cx="170.2" cy="242.2" r="2.2"></circle>
                <circle cx="194.2" cy="266.2" r="2.2"></circle>
                <circle cx="2.2" cy="266.2" r="2.2"></circle>
                <circle cx="218.2" cy="266.2" r="2.2"></circle>
                <circle cx="26.2" cy="266.2" r="2.2"></circle>
                <circle cx="242.2" cy="266.2" r="2.2"></circle>
                <circle cx="50.2" cy="266.2" r="2.2"></circle>
                <circle cx="266.2" cy="266.2" r="2.2"></circle>
                <circle cx="74.2" cy="266.2" r="2.2"></circle>
                <circle cx="290.2" cy="266.2" r="2.2"></circle>
                <circle cx="98.2" cy="266.2" r="2.2"></circle>
                <circle cx="314.2" cy="266.2" r="2.2"></circle>
                <circle cx="122.2" cy="266.2" r="2.2"></circle>
                <circle cx="338.2" cy="266.2" r="2.2"></circle>
                <circle cx="146.2" cy="266.2" r="2.2"></circle>
                <circle cx="170.2" cy="266.2" r="2.2"></circle>
                <circle cx="194.2" cy="290.2" r="2.2"></circle>
                <circle cx="2.2" cy="290.2" r="2.2"></circle>
                <circle cx="218.2" cy="290.2" r="2.2"></circle>
                <circle cx="26.2" cy="290.2" r="2.2"></circle>
                <circle cx="242.2" cy="290.2" r="2.2"></circle>
                <circle cx="50.2" cy="290.2" r="2.2"></circle>
                <circle cx="266.2" cy="290.2" r="2.2"></circle>
                <circle cx="74.2" cy="290.2" r="2.2"></circle>
                <circle cx="290.2" cy="290.2" r="2.2"></circle>
                <circle cx="98.2" cy="290.2" r="2.2"></circle>
                <circle cx="314.2" cy="290.2" r="2.2"></circle>
                <circle cx="122.2" cy="290.2" r="2.2"></circle>
                <circle cx="338.2" cy="290.2" r="2.2"></circle>
                <circle cx="146.2" cy="290.2" r="2.2"></circle>
                <circle cx="170.2" cy="290.2" r="2.2"></circle>
                <circle cx="194.2" cy="314.2" r="2.2"></circle>
                <circle cx="2.2" cy="314.2" r="2.2"></circle>
                <circle cx="218.2" cy="314.2" r="2.2"></circle>
                <circle cx="26.2" cy="314.2" r="2.2"></circle>
                <circle cx="242.2" cy="314.2" r="2.2"></circle>
                <circle cx="50.2" cy="314.2" r="2.2"></circle>
                <circle cx="266.2" cy="314.2" r="2.2"></circle>
                <circle cx="74.2" cy="314.2" r="2.2"></circle>
                <circle cx="290.2" cy="314.2" r="2.2"></circle>
                <circle cx="98.2" cy="314.2" r="2.2"></circle>
                <circle cx="314.2" cy="314.2" r="2.2"></circle>
                <circle cx="122.2" cy="314.2" r="2.2"></circle>
                <circle cx="338.2" cy="314.2" r="2.2"></circle>
                <circle cx="146.2" cy="314.2" r="2.2"></circle>
                <circle cx="170.2" cy="314.2" r="2.2"></circle>
                <circle cx="194.2" cy="338.2" r="2.2"></circle>
                <circle cx="2.2" cy="338.2" r="2.2"></circle>
                <circle cx="218.2" cy="338.2" r="2.2"></circle>
                <circle cx="26.2" cy="338.2" r="2.2"></circle>
                <circle cx="242.2" cy="338.2" r="2.2"></circle>
                <circle cx="50.2" cy="338.2" r="2.2"></circle>
                <circle cx="266.2" cy="338.2" r="2.2"></circle>
                <circle cx="74.2" cy="338.2" r="2.2"></circle>
                <circle cx="290.2" cy="338.2" r="2.2"></circle>
                <circle cx="98.2" cy="338.2" r="2.2"></circle>
                <circle cx="314.2" cy="338.2" r="2.2"></circle>
                <circle cx="122.2" cy="338.2" r="2.2"></circle>
                <circle cx="338.2" cy="338.2" r="2.2"></circle>
                <circle cx="146.2" cy="338.2" r="2.2"></circle>
                <circle cx="170.2" cy="338.2" r="2.2"></circle>
              </svg>
            </figure>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="row gy-xl-5 g-4">

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="fbxer-wraps">
                  <div class="fbxerWraps-icons mb-3">
                    <div class="square--70 circle bg-light-primary"><i class="fa-solid fa-gifts text-primary fs-3"></i>
                    </div>
                  </div>
                  <div class="fbxerWraps-caps">
                    <h5 class="fw-bold fs-6">Get Superb Deals</h5>
                    <p class="fw-light fs-6 m-0">Just fill up a page with draft copy about the client’s business and
                      they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong
                      way.</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="fbxer-wraps">
                  <div class="fbxerWraps-icons mb-3">
                    <div class="square--70 circle bg-light-info"><i class="fa-solid fa-gifts text-info fs-3"></i></div>
                  </div>
                  <div class="fbxerWraps-caps">
                    <h5 class="fw-bold fs-6">100% Transparency Price</h5>
                    <p class="fw-light fs-6 m-0">Just fill up a page with draft copy about the client’s business and
                      they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong
                      way.</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="fbxer-wraps">
                  <div class="fbxerWraps-icons mb-3">
                    <div class="square--70 circle bg-light-success"><i class="fa-solid fa-gifts text-success fs-3"></i>
                    </div>
                  </div>
                  <div class="fbxerWraps-caps">
                    <h5 class="fw-bold fs-6">Pure Trusted & Free</h5>
                    <p class="fw-light fs-6 m-0">Just fill up a page with draft copy about the client’s business and
                      they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong
                      way.</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="fbxer-wraps">
                  <div class="fbxerWraps-icons mb-3">
                    <div class="square--70 circle bg-light-warning"><i class="fa-solid fa-gifts text-warning fs-3"></i>
                    </div>
                  </div>
                  <div class="fbxerWraps-caps">
                    <h5 class="fw-bold fs-6">Travel With Confidence</h5>
                    <p class="fw-light fs-6 m-0">Just fill up a page with draft copy about the client’s business and
                      they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong
                      way.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ============================ Flexible features End ================================== -->


    <!-- ============================ Video Helps End ================================== -->
    <section class="bg-cover" style="background:url(assets/img/bg-3.jpg)no-repeat;" data-overlay="5">
      <div class="ht-150"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="video-play-wrap text-center">
              <div class="video-play-btn d-flex align-items-center justify-content-center">
                <a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-bs-toggle="modal" data-bs-target="#popup-video" class="square--90 circle bg-white fs-2 text-primary"><i class="fa-solid fa-play"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="ht-150"></div>
    </section>
    <!-- ============================ Video Helps End ================================== -->


    <!-- ============================ Our Reviews Start ================================== -->
    <section class="gray">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
            <div class="secHeading-wrap text-center mb-5">
              <h2>Loving Reviews By Our Customers</h2>
              <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
            </div>
          </div>
        </div>

        <div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card border-0 rounded-3">
              <div class="card-body">
                <div class="position-absolute top-0 end-0 mt-3 me-3"><span
                    class="square--40 circle text-primary bg-light-primary"><i
                      class="fa-solid fa-quote-right"></i></span></div>
                <div class="d-flex align-items-center flex-thumbes">
                  <div class="revws-pic"><img src="assets/img/team-1.jpg" class="img-fluid rounded-2" width="80" alt="">
                  </div>
                  <div class="revws-caps ps-3">
                    <h6 class="fw-bold fs-6 m-0">Aman Diwakar</h6>
                    <p class="text-muted-2 text-md m-0">United States</p>
                    <div class="d-flex align-items-center justify-content-start">
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="revws-desc mt-3">
                  <p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card border-0 rounded-3">
              <div class="card-body">
                <div class="position-absolute top-0 end-0 mt-3 me-3"><span
                    class="square--40 circle text-primary bg-light-primary"><i
                      class="fa-solid fa-quote-right"></i></span></div>
                <div class="d-flex align-items-center flex-thumbes">
                  <div class="revws-pic"><img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
                  </div>
                  <div class="revws-caps ps-3">
                    <h6 class="fw-bold fs-6 m-0">Kunal M. Thakur</h6>
                    <p class="text-muted-2 text-md m-0">United States</p>
                    <div class="d-flex align-items-center justify-content-start">
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="revws-desc mt-3">
                  <p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card border-0 rounded-3">
              <div class="card-body">
                <div class="position-absolute top-0 end-0 mt-3 me-3"><span
                    class="square--40 circle text-primary bg-light-primary"><i
                      class="fa-solid fa-quote-right"></i></span></div>
                <div class="d-flex align-items-center flex-thumbes">
                  <div class="revws-pic"><img src="assets/img/team-3.jpg" class="img-fluid rounded-2" width="80" alt="">
                  </div>
                  <div class="revws-caps ps-3">
                    <h6 class="fw-bold fs-6 m-0">Divya Talwar</h6>
                    <p class="text-muted-2 text-md m-0">United States</p>
                    <div class="d-flex align-items-center justify-content-start">
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="revws-desc mt-3">
                  <p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card border-0 rounded-3">
              <div class="card-body">
                <div class="position-absolute top-0 end-0 mt-3 me-3"><span
                    class="square--40 circle text-primary bg-light-primary"><i
                      class="fa-solid fa-quote-right"></i></span></div>
                <div class="d-flex align-items-center flex-thumbes">
                  <div class="revws-pic"><img src="assets/img/team-4.jpg" class="img-fluid rounded-2" width="80" alt="">
                  </div>
                  <div class="revws-caps ps-3">
                    <h6 class="fw-bold fs-6 m-0">Karan Maheshwari</h6>
                    <p class="text-muted-2 text-md m-0">United States</p>
                    <div class="d-flex align-items-center justify-content-start">
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="revws-desc mt-3">
                  <p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card border-0 rounded-3">
              <div class="card-body">
                <div class="position-absolute top-0 end-0 mt-3 me-3"><span
                    class="square--40 circle text-primary bg-light-primary"><i
                      class="fa-solid fa-quote-right"></i></span></div>
                <div class="d-flex align-items-center flex-thumbes">
                  <div class="revws-pic"><img src="assets/img/team-5.jpg" class="img-fluid rounded-2" width="80" alt="">
                  </div>
                  <div class="revws-caps ps-3">
                    <h6 class="fw-bold fs-6 m-0">Ritika Mathur</h6>
                    <p class="text-muted-2 text-md m-0">United States</p>
                    <div class="d-flex align-items-center justify-content-start">
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                      <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="revws-desc mt-3">
                  <p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ============================ Our Reviews End ================================== -->


    <!-- ================================ Article Section Start ======================================= -->
    <section>
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
            <div class="secHeading-wrap text-center mb-5">
              <h2>Trending & Popular Articles</h2>
              <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
            </div>
          </div>
        </div>


        <div class="row justify-content-center g-4">

          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="blogGrid-wrap d-flex flex-column h-100">
              <div class="blogGrid-pics">
                <a href="#" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded"
                    alt="Blog image"></a>
              </div>
              <div class="blogGrid-caps pt-3">
                <div class="d-flex align-items-center mb-1"><span
                    class="label text-success bg-light-success">Destination</span></div>
                <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
                    Comfirtable And Best Price</a></h4>
                <p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
                  to be unintendedly humorous or offensive day of going live.</p>
                <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="blogGrid-wrap d-flex flex-column h-100">
              <div class="blogGrid-pics">
                <a href="#" class="d-block"><img src="assets/img/blog-2.jpg" class="img-fluid rounded"
                    alt="Blog image"></a>
              </div>
              <div class="blogGrid-caps pt-3">
                <div class="d-flex align-items-center mb-1"><span
                    class="label text-success bg-light-success">Journey</span></div>
                <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
                    Comfirtable And Best Price</a></h4>
                <p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
                  to be unintendedly humorous or offensive day of going live.</p>
                <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="blogGrid-wrap d-flex flex-column h-100">
              <div class="blogGrid-pics">
                <a href="#" class="d-block"><img src="assets/img/blog-3.jpg" class="img-fluid rounded"
                    alt="Blog image"></a>
              </div>
              <div class="blogGrid-caps pt-3">
                <div class="d-flex align-items-center mb-1"><span
                    class="label text-success bg-light-success">Business</span></div>
                <h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
                    Comfirtable And Best Price</a></h4>
                <p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
                  to be unintendedly humorous or offensive day of going live.</p>
                <a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ================================ Article Section Start ======================================= -->



    <!-- ============================ Call To Action Start ================================== -->
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center justify-content-between">

          <div class="col-xl-4 col-lg-4 col-md-6">
            <h4 class="text-light fw-bold lh-base m-0">Join our Newsletter To Keep Up To Date With Us!</h4>
          </div>

          <div class="col-xl-5 col-lg-5 col-md-6">
            <div class="newsletter-forms mt-md-0 mt-4">
              <form>
                <div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

                  <div class="col-xl-9 col-lg-8 col-md-8">
                    <div class="form-group m-0">
                      <input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="form-group m-0">
                      <button type="button" class="btn btn-dark fw-medium full-width">Submit<i
                          class="fa-solid fa-arrow-trend-up ms-2"></i></button>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- ============================ Call To Action Start ================================== -->



  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->



@endsection