<footer class="footer1 footer-background-color" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="company-info">
                    <h5>About</h5>
                    <ul>
                        <li>
                            Copyright &copy; <span>{!! empty($page->corporation->year) ? '' : nl2br(e($page->corporation->website-year)) !!}</span>
                            <span>{{ $content -> store_name}} </span>
                        </li>
                        <li>{{$page->corporation->name}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div>
                    <h5>Menu</h5>
                    <ul>
                        <!--If any 1 product in shop is set to bill model 2,3,4 then cancel link enable -->
                        <li><a href="/">Home</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/terms">Terms</a></li>
                        <li><a href="/privacy">Privacy</a></li>
                        <li><a href="/products">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 pt-md-0 pt-5">
                <h5>Contact</h5>
                <ul>
                    <li class="pb-2">
                        <i class="fa fa-phone fs-5 me-3 footer-icon-color"></i>
                        <a href="" class="js_website-phone">{!! empty($page->support_phone) ? '' : nl2br(e($page->support_phone)) !!}</a>
                    </li>
                    <li class="pb-2">
                        <i class="fa fa-envelope fs-5 me-3 footer-icon-color"></i>
                        <a href="" class="js_website-email">{!! empty($page->support_email) ? '' : nl2br(e($page-> support_email)) !!}</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt fs-5 me-3 footer-icon-color"></i>
                        <span class="js_website-address">{!! empty($page->support_return_address) ? '' : nl2br(e($page->support_return_address)) !!}</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 pt-md-0 pt-5">
                <h5>Return Order</h5>
                <ul>
                    <li class="js_website-return-partner">{{$page->corporation->name}}</li>
                    <ul>
                        <li><span class="js_website-return-address">{!! empty($page->support_return_address) ? '' : nl2br(e($page->support_return_address)) !!}</span></li>
                    </ul>
                    <li class="pb-2">
                        <i class="fa fa-phone fs-5 me-3 footer-icon-color"></i>
                        <a href="">{{ $page->support_phone ?? '' }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-section">
        <div class="container">
            <div class="copyright">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <span class="js_website-name">{{ $content -> store_name}}</span>
                    </div>
                    <div class="col-12 col-md-6 text-md-end">
                        <div class="footer-cc">
                            <img src="images/payment/mastercard.png" />
                            <img src="images/payment/discover.png" />
                            <img src="images/payment/visa.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>