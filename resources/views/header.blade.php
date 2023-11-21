<section class="navbar-section navbar-section8" id="navbar-section">
      <!-----Header-top-bar Ends here----->
      <header class="navbar-nav8">
        <div class="nav-color">
          <div class="container">
            <div class="navbar">
              <h2>
                <a class="navbar-brand nav-text-color" href="/">
                  <span>{{$content -> store_name}}</span>
                </a>
              </h2>
              <button
                class="navbar-toggler"
                id="toggle"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
              </button>
              <div class="d-lg-flex align-items-center d-none header-content">
                <div class="header-icon d-flex align-items-center">
                  <i class="fas fa-phone-alt fs-1 me-2 nav-icon-color"></i
                  ><strong
                    ><span class="cwp-contact-info-content">
                      <h5 class="nav-text-color">Helpline:</h5>
                      <div class="cwp-contact-info-title nav-text-color">
                        <span>{{$page->support_phone}}</span>
                      </div> </span
                  ></strong>
                </div>
                <div>
                  <ul class="navbar-nav cart-nav ml-auto">
                    <li class="cart_link">
                      <a href="javascript:void(0);"
                        ><i
                          class="fas fa-shopping-cart me-2 nav-icon-color"
                        ></i>
                        <span class="cart_text nav-text-color"></span>
                        <span class="cart_amt nav-text-color">
                          <p
                            id="cart-total"
                            class="subtotalAmount nav-text-color"
                            style="display: inline"
                          >
                            0.00
                          </p>
                        </span>
                      </a>
                      <div class="minibag cart_bag" id="minicart">
                        <div class="minicart_inner">
                          <div class="minicart_table table-responsive">
                            <table class="table minicart_details">
                              <tr id="minicartRow"></tr>
                            </table>
                          </div>
                          <div class="subtotal_column">
                            <p>
                              Subtotal: <span
                                class="subtotalAmount"
                                id="cart-subtotal"
                              ></span>
                            </p>
                          </div>
                          <div class="minicart_buttons">
                            <a
                              href="/cart"
                              class="btn btn-continue shop-btn-outline"
                            >
                              View Cart
                            </a>
                            <a
                              href="/checkout"
                              class="btn btn-update shop-btn-color"
                            >
                              Checkout
                            </a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="primary-navigation">
          <nav class="navbar navbar-expand-lg p-0 nav-color-bottom">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      href="/"
                      class="nav-link nav-txt-color-bottom nav-active-color"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="/products" class="nav-link nav-txt-color-bottom"
                      >Shop</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="/contact" class="nav-link nav-txt-color-bottom"
                      >Contact</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="/cart" class="nav-link nav-txt-color-bottom"
                      >Cart</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </section>


