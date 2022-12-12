@extends('layout.app')

@section('main')
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>WELCOME TO CROSSFIT</h2>
                        <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                            everyday men.</p>
                        <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                            the population here in North America, that actually want and need success to be hard! For
                            those of you who are serious about having more, doing more, giving more and being more.</p>
                        <a href="#" class="primary-btn about-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('img/home-about.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="{{asset('img/classes-title-bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>Choose Your Program</h2>
                            <p>Our Crossfit experts can help you discover new training techniques and exercises that
                                offer a dynamic and efficient full-body workout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-1.jpg">
                        <h4>Crossfit Level 1</h4>
                        <p>Sufferers around the globe will be happy to hear that there are sleep apnea remedies.</p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-2.jpg">
                        <h4>BootCamp</h4>
                        <p>The oil, also called linseed oil, has many industrial uses – it is an important ingredient
                        </p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-3.jpg">
                        <h4>Energy Blast</h4>
                        <p>It is a very common occurrence like cold or fever depending upon your lifestyle. </p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-4.jpg">
                        <h4>CLASSIC BODY BALANCE</h4>
                        <p>The procedure is usually a preferred alternative to photorefractive keratectomy,</p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
