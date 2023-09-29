<!DOCTYPE html>
<html lang="en">
<head>
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
                <a href="/"> <img width="300px" src="{{asset('logo.png')}}" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/about">About Us</a>
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