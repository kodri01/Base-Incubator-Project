<footer class="text-center">
    <div class="container">
        <!-- Logo -->
        <div class="container text-center" style="margin-top: -50px">
            <a class="logo" href="{{ url('/') }}">
                <img src="{{ url('Image/' . $abouts->logo) }}" style="width: 120px" alt="logo">
                {{-- <img src="{{ url('img/logo-light.png') }}" alt="logo"> --}}
            </a>
            {{-- <label for="" class=" text-uppercase" style="color: white; font-size:20px; margin-left:60px">
                {{ $abouts->name }}</label> --}}
        </div>
        <div>
            <label style="color: white;" for=""><i class='bx bxs-map'></i>
                {{ $abouts->alamat }}</label><br>
            <label style="color: white;" for=""><i class='bx bxs-phone-call '></i>
                {{ $abouts->contact }}</label>
        </div>
        <div class="social mt-50">
            <a href="{{ $abouts->facebook }}"><i class='bx bxl-facebook'></i></a>
            <a href="{{ $abouts->twitter }}"><i class='bx bxl-twitter'></i></a>
            <a href="{{ $abouts->instagram }}"><i class='bx bxl-instagram'></i></a>
        </div>

        {{-- <p><a href="www.templatespoint.net">Templates Point</a></p> --}}
    </div>


    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- popper.min -->
    <script src="js/poppers.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstraps.min.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- jquery.waypoints.min -->
    <script src="js/jquery.waypointss.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousels.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popups.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellars.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- YouTubePopUp.jquery -->
    <script src="js/YouTubePopUp.jquery.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom scripts -->
    <script src="{{ url('js/scripts.js') }}"></script>

</footer>

<!-- End Footer ====
======================================= -->
