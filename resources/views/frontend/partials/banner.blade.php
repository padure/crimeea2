<div class="slider_main">
    <!-- carousel code -->
    <div id="banner1" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- first slide -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="creative">
                                    <h1>Sauna <br>Crimeea</h1>
                                    <p>
                                        Bucură-te de o experiență relaxantă și revigorantă la Sauna Crimeea! Descoperă confortul unei saune finlandeze, răcorește-te în bazinul cu apă caldă și simte energia căldării cascadei cu apă rece.
                                    </p>
                                    <a class="read_more" href="{{ route('contacts.index') }}">Contacte</a>
                                    <a class="read_more" href="{{ route('prices.index') }}">Prețuri</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row mar_right">
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{asset('images/slide/slide_1_1.jpg')}}" alt="#"/></figure>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{ asset('images/slide/slide_1_2.jpg') }}" alt="#"/></figure>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="creative">
                                    <h1>Sauna <br>Crimeea</h1>
                                    <p>
                                        Descoperă o oază de relaxare la Sauna Crimeea! Îmbrățișează căldura saunei finlandeze și răcorește-te în apă caldă. Bucură-te de momente de pură revitalizare!
                                    </p>
                                    <a class="read_more" href="{{ route('contacts.index') }}">Contacte</a>
                                    <a class="read_more" href="{{ route('prices.index') }}">Prețuri</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row mar_right">
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{ asset('images/slide/slide_2_1.jpg') }}" alt="#"/></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{ asset('images/slide/slide_2_2.jpg') }}" alt="#"/></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third slide-->
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="creative">
                                    <h1>Sauna <br>Crimeea</h1>
                                    <p>
                                        Încearcă o escapadă relaxantă la Sauna Crimeea! Simte căldura în sauna finlandeză și răcorește-te în bazinul cu apă caldă, pentru o revigorare completă a corpului și minții tale.
                                    </p>
                                    <a class="read_more" href="{{ route('contacts.index') }}">Contacte</a>
                                    <a class="read_more" href="{{ route('prices.index') }}">Prețuri</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row mar_right">
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{ asset('images/slide/slide_3_1.jpg') }}" alt="#"/></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{ asset('images/slide/slide_3_2.jpg') }}" alt="#"/></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- controls -->
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
