<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/Assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
  
       <header>
        <nav class="navbar  navbar-expand-sm navbar-dark bg-dark " style="width: 100% !important;position:fixed;z-index:99;background:#8F7441    !important;">
            <div class="container-fluid">
                <a href=""> <img width="300px" src="{{asset('logo.png')}}" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                  </li>
              
              
                </ul>
                <form class="d-flex">
                  <a class="mx-2 btn btn-outline-warning" href="/login" type="submit">Login</a>

                  <a class="btn btn-outline-warning active" href="/register" type="submit">Signup</a>
                </form>
              </div>
            </div>
          </nav>
       </header>
 
    <section class="hero bg_img vh-100" style="background-image:url({{asset('hero.jpg')}}); box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);background-size:cover !important;background-position:left !important;">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-top: -100px !important;padding-top:-100px;">
                        <h2>Invest in an Industry Leader, Professional, and Reliable Company.</h2>
             We provide you with the most necessary features that will make your experience better. Not only we guarantee the fastest and the most exciting returns on your investments, but we also guarantee the security of your investment.

                    </div>
                    <a class="btn btn-outline-warning active mt-4 px-4" href="/register" type="submit">Signup</a>

                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section pt-120 pb-120 bg_img" style="background-image:url({{asset('bg-2.jpg')}});padding-bottom:120px;margin-top:0px !important; box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.527);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="about-content">
                        <h2 class="section-title mb-3">
                            <span class="font-weight-normal">About</span>
                            <b class="base--color">Us</b>
                        </h2>
                        <p class="f-size-15">
                            We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.
                        </p>
                        <p class="mt-4 f-size-15">
                            Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.
                        </p>
                       <a href="#testimonial" class="btn btn-warning  px-3 mt-2 ">Why Cashwavez</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120 overlay--radial bg_img" style="background-image:url({{asset('bg-3.jpg')}});box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.527);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="font-weight-normal">Why Choose</span>
                            <b class="base--color">Cashwavez</b>
                        </h2>
                        <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.</p>
                    </div>                   
                </div>
            </div>
            <div class="row justify-content-center mb-none-30 d-flex">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 ">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="lar la-copy"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Legal Company</h4>
                        </div>
                        <p>
                            Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-intersect"></i>
                            </div>
                            <h4 class="choose-card__title base--color">High reliability</h4>
                        </div>
                        <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Anonymity</h4>
                        </div>
                        <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                        </div>
                        <p>Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $10.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h4 class="choose-card__title base--color">
                                Referral Program</h4>
                        </div>
                        <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-door-open"></i>
                            </div>
                            <h4 class="choose-card__title base--color">24/7 Support</h4>
                        </div>
                        <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty..</p>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-database-lock"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Dedicated Server</h4>
                        </div>
                        <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <h4 class="choose-card__title base--color">SSL Secured</h4>
                        </div>
                        <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4 class="choose-card__title base--color">DDOS Protection</h4>
                        </div>
                        <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-120 pb-120 bg_img" style="background-image: url({{asset('bg-5.jpg')}});box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="font-weight-normal">How</span>
                            <b class="base--color">Hyiplab</b>
                            <span class="font-weight-normal">Works</span>
                        </h2>
                        <p>
                            Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="las la-user base--color">
                            </i>
                            <span class="step-number">01</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Create Account</h4>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="las la-hand-holding-usd base--color"></i>
                            <span class="step-number">02</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Invest To Plan</h4>
                          </div>
                    </div>
                </div><div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="las la-wallet base--color"></i>
                            <span class="step-number">03</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Get Profit</h4>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  {{-- testimonial  --}}
    <section class="pt-120 pb-120 bg_img overlay--radial" style="background-image:url({{asset('bg-7.jpg')}});">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="font-weight-normal">What Users Say</span>
                          
                        </h2>
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content" id="testimonial">
                            <p>
                                I've been investing with this company for a while now, and I'm extremely pleased with the reliable income it provides. They truly prioritize minimizing risks, and I feel my investments are in safe hands.    </p>
                        </div>
                        <div class="testimonial-card__client">
                            <div class="thumb">
                                <img src="{{asset('1.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h6 class="name">Fahaddevs</h6>
                                <span class="designation">CEO of fahaddevs</span>
                                <div class="ratings">
                                    <i class="las la-star" style="color: #E4B332;"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <p>
                                It's reassuring to know that this company operates completely within the legal framework. Their certification and commitment to legality make me trust them even more with my investments.
                            </p>
                        </div>
                        <div class="testimonial-card__client">
                            <div class="thumb">
                                <img src="{{asset('2.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h6 class="name">Alina</h6>
                                <span class="designation">CTO of fahaddevs</span>
                                <div class="ratings">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <p>
                                The high reliability of this investment platform is impressive. They've earned the trust of so many people, including me. Their continuous efforts to enhance security give me peace of mind.
                            </p>
                        </div>
                        <div class="testimonial-card__client">
                            <div class="thumb">
                                <img src="{{asset('3.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h6 class="name">Amir Khan</h6>
                                <span class="designation">COO of fahaddevs</span>
                                <div class="ratings">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>