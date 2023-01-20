<footer class="w3l-footer">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="right-side">
                        
                        <div class="row footer-links">


                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Movies</h6>
                                <ul>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">English Movies</a></li>
                                    <li><a href="#">Tailor</a></li>
                                    <li><a href="#">Upcoming Movies</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a> </li>
                                    {{-- <li><a href="#">About</a> </li> --}}
                                    {{-- <li><a href="#">Tv Series</a> </li> --}}
                                    {{-- <li><a href="#">Blogs</a> </li> --}}
                                    @if (!session()->has('username'))
                                    <li><a href="{{url('login')}}">Login</a></li>
                                    @endif
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            {{-- <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Locations</h6>
                                <ul>
                                    <li><a href="#">Asia</a></li>
                                    <li><a href="#">France</a></li>
                                    <li><a href="#">Taiwan</a></li>
                                    <li><a href="#">United States</a></li>
                                    <li><a href="#">Korea</a></li>
                                    <li><a href="#">United Kingdom</a></li>
                                </ul>
                            </div> --}}
                            <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                                <h6>Newsletter</h6>
                                <form action="index.html#" class="subscribe mb-3" method="post">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button><span class="fa fa-envelope-o"></span></button>
                                </form>
                                <p>Enter your email and receive the latest news, updates and special offers from us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>&copy; 2020 ProShowz. All rights reserved | Designed by <a
                                href="../../../../../../w3layouts_default.html">W3layouts</a></p>
                    </div>

                    <ul class="social text-lg-right">
                        <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->

    </section>
</footer>