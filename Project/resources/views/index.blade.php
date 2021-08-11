<!DOCTYPE html>
<html lang="en">
<head>

    <title>Car rental</title>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="h-10 w-auto fill-current"/>
            </a>
        </div>


        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="tel:+37064151451"><img src="images/phone-1.png" class="img-responsive" alt="">24/7 support
                        +370 641 51451</a></li>
                <li><a href="mailto:info@carrental.com"><img src="images/mail-142.png" class="img-responsive" alt="">Email:
                        info@carrental.coma</a></li>



                        <x-dropdown align="center" width="45">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('kazkas') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>

                                </form>
                            </x-slot>
                        </x-dropdown>


            </ul>

            </div>

        </div>
    <div class="sm:flex sm:items-right sm:ml-6 mt-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="flex items-center text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div class="h5">{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Authentication -->
                <x-dropdown-link :href="route('reservations.index')">
                    {{ __('My reservations') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">


                <!-- Settings Dropdown -->

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-4 pb-1 border-t border-gray-200 mt-6">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <x-responsive-nav-link :href="route('reservations.index')">
                        {{ __('My reservations') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="section-title text-center">
                    <h2>Car reservation <small>Lorem ipsum dolor sit amet.</small></h2>
                </div>
            </div>

            <br>


            <br>
            <form action="" method="post">
                <div id="reservationContainer">
                    <div class="reserveCell">
                        <div class="reservationTextAuto">Jūsų norimas automobilis:</div>
                        <div class="reservationInputAuto">
                            <select class="masina" name="masina">
                                @foreach($list as $item)
                                    <option value="BMW X3">{{ $item->manufacturer }} {{$item->model}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Rezervacijos pradžia:</div>
                        <div class="reservationInput"><input type="date" name="pradziaData"></div>
                        <div class="reservationInput"><input type="time" name="pradziaLaikas"></div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Rezervacijos pabaiga:</div>
                        <div class="reservationInput"><input type="date" name="pabaigaData"></div>
                        <div class="reservationInput"><input type="time" name="pabaigaLaikas"></div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Jūsų vardas</div>
                        <div class="reservationInput2"><input type="text" name="vardas"></div>
                        <div class="reservationText">Jūsų telefono nr.</div>
                        <div class="reservationInput2"><input type="tel" name="telefonas" pattern="[0-9]{9}"
                                                              placeholder="86*******" maxlenght="9"></div>
                    </div>
                </div>
                <div>
                    <input type="submit" name="rezervuoti" value="Rezervuoti" class="submitButton">
                </div>
            </form>


        </div>
    </div>
</section>

</main>

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                        <input type="email" class="form-control" placeholder="Enter email address" name="email"
                               required>

                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                                  required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Send Message">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Headquarter</h2>
                    </div>
                    <address>
                        <p>212 Barrington Court <br>New York, ABC 10001</p>
                    </address>

                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright &copy; 2020 Company Name</p>
                        <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                    </div>
                    <address>
                        <p>+1 333 4040 5566</p>
                        <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                    </address>

                    <div class="footer_menu">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="terms">Terms & Conditions</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-info newsletter-form">
                    <div class="section-title">
                        <h2>Newsletter Signup</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <form action="#" method="get">
                                <input type="email" class="form-control" placeholder="Enter your email" name="email"
                                       id="email" required>
                                <input type="submit" class="form-control" name="submit" id="form-submit"
                                       value="Send me">
                            </form>
                            <span><sup>*</sup> Please note - we do not spam your email.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
