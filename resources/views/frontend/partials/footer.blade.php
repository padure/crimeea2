<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 px-5">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="hedingh3 text_align_left">
                                <h3>Despre noi</h3>
                                <p>
                                    Descoperă povestea noastră și angajamentul pentru experiențe de relaxare la standarde înalte. Bine ați venit la Sauna Crimeea - unde relaxarea devine o artă.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 px-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="hedingh3 text_align_left">
                                <h3>Meniu</h3>
                                <ul class="menu_footer">
                                    <li><a href="{{ route('home.index') }}">Acasă</a></li>
                                    <li><a href="{{ route('about.index') }}">Despre noi</a></li>
                                    <li><a href="{{ route('service.index') }}">Servicii</a></li>
                                    <li><a href="{{ route('prices.index') }}">Preturi</a></li>
                                    <li><a href="{{ route('contacts.index') }}">Contacte</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="hedingh3  text_align_left">
                                <h3>Contacte</h3>
                                <ul class="top_infomation">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:+37378953583" class="font-weight-bold">+37378953583</a>
                                    </li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="Javascript:void(0)">demo@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="follow text_align_center">
                            <h3>Urmărește-ne</h3>
                            <ul class="social_icon">
                                <li><a href="{{ url('https://www.facebook.com/saunacrimeeaindependentei') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>&copy; <a href="{{ route('home.index') }}">{{ config('app.name', 'Sauna Crimeea') }}</a>. Toate Drepturile Rezervate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
