<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css.css')}}">
</head>
<x-app-layout>
 
    <div class="inner-hero bg_img" style="background-image:url({{asset('bg-1.jpg')}});">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <h2 class="page-title">All Plans</h2>
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home - </a>
                        </li>
                        <li style="padding-left:5px !important;"> Plan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="space">
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
      </div>
    <div class="pt-120 pb-120" style="padding-top:120px;padding-bottom:120px;background: black;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row mb-none-30">
                        <div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Deposit</span>
                                    <h4 class="currency-amount">$255</h4>
                                </div>
                                <div class="col-4 ">
                                    <div class="icon  ml-auto">
                                        <i class="fa-solid fa-money-bill-transfer fs-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Daily Profit</span>
                                    <h4 class="currency-amount" id="daily-profit">$1,105</h4>

                                </div>
                                <div class="col-4">
                                    <div class="icon ml-auto">
                                        <i class="bi bi-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Level</span>
                                    <h4 class="currency-amount">$500</h4>
                                </div>
                                <div class="col-4">
                                    <div class="icon ml-auto">
                                        <i class="bi bi-send-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Invite Friend</span>
                                    <h4 class="currency-amount">$1,050</h4>
                                </div>
                                <div class="col-4">
                                    <div class="icon ml-auto">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Withdraw</span>
                                    <h4 class="currency-amount">$1703</h4>
                                </div>
                                <div class="col-4">
                                    <div class="icon ml-auto">
                                        <i class="bi bi-bank"></i>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-xl-4 col-sm-6 mb-30" style="margin-bottom:30px;">
                            <div class="d-widget d-flex flex-wrap">
                                <div class="col-8">
                                    <span class="caption">Referral Earnings</span>
                                    <h4 class="currency-amount">$1710.5</h4>
                                </div>
                                <div class="col-4">
                                    <div class="icon ml-auto">
                                        <i class="bi bi-person-fill-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="padding-top:120px; padding-bottom:120px;background-color: black;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="font-weight-normal">Investment</span>
                            <b class="base--color">Plans</b>
                        </h2>
                        <p>
                            To make a solid investment, you have to know where you are investing. Find a plan which is best for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-none-30">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="package-card text-center bg_img" style="background-image:url({{asset('bg-4.png')}});">
                        <h4 class="package-card__title base--color mb-2">
                            Level 1
                        </h4>
                        <ul class="package-card__features mt-4">
                            <li>Daily Earning 2$</li>
                            <li>Bonus Upto 20%</li>
                            <li>Referral Earning 12$</li>
                            <!-- <li>Total 30% +
                                <span class="badge base--bg text-dark">Capital</span>
                            </li> -->
                        </ul>
                        <div class="package-card__range mt-5 base--color">
                            50$
                        </div>
                        <a href="#0" class="cmn-btn btn-md mt-4">Invest Now</a>
                    </div>   
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="package-card text-center bg_img" style="background-image:url({{asset('bg-4.png')}});">
                        <h4 class="package-card__title base--color mb-2">
                            Level 2
                        </h4>
                        <ul class="package-card__features mt-4">
                            <li>Daily Earnings 3.2$</li>
                            <li>Bonus Upto 20%</li>
                            <li>Referral Earning 12%k</li>
                            <!-- <li>Total 30% +
                                <span class="badge base--bg text-dark">Capital</span> -->
                            </li>
                        </ul>
                        <div class="package-card__range mt-5 base--color">
                            100$
                        </div>
                        <a href="#0" class="cmn-btn btn-md mt-4">Invest Now</a>
                    </div>   
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="package-card text-center bg_img" style="background-image:url({{asset('bg-4.png')}});">
                        <h4 class="package-card__title base--color mb-2">
                            level 3
                        </h4>
                        <ul class="package-card__features mt-4">
                            <li>Daily Earning 4$</li>
                            <li>Bonus Upto 20%</li>
                            <li>Referral earning 12%</li>
                            <!-- <li>Total 30% +
                                <span class="badge base--bg text-dark">Capital</span>
                            </li> -->
                        </ul>
                        <div class="package-card__range mt-5 base--color">
                            $200
                        </div>
                        <a href="#0" class="cmn-btn btn-md mt-4">Invest Now</a>
                    </div>   
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="package-card text-center bg_img" style="background-image:url({{asset('bg-4.png')}});">
                        <h4 class="package-card__title base--color mb-2">
                            level 4
                        </h4>
                        <ul class="package-card__features mt-4">
                            <li>Daily Earning 8.5$</li>
                            <li>Bonus Upto 20%</li>
                            <li>Referral earning 12%</li>
                            <!-- <li>Total 30% +
                                <span class="badge base--bg text-dark">Capital</span>
                            </li> -->
                        </ul>
                        <div class="package-card__range mt-5 base--color">
                            500$
                        </div>
                        <a href="#0" class="cmn-btn btn-md mt-4">Invest Now</a>
                    </div>   
                </div>
            </div>
        </div>
    </section>
    {{-- Task popup --}}
<!-- resources/views/task-popup.blade.php -->

<div id="task-popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('ann.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="remove text-end">
                    <button class="btn fs-2" onclick="closeTaskPopup()"><i class="fs-2 bi bi-x-circle-fill"></i></button>
                </div>

                <h4 class="mt-4">Complete Task</h4>
                <p>To complete the task, click the button below:</p>
                <a href="{ $task }" class="btn btn-warning">Task Link</a>

            </div>
        </div>
    </div>
</div>

<button id="show-task-btn" class="btn btn-primary fs-2">Show Task Popup</button>

    <!-- Popup HTML -->
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('ann.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="remove text-end">
                        <button class="btn fs-2" onclick="closePopup()"><i class="fs-2 bi bi-x-circle-fill"></i></button>
                    </div>

                    <h4 class="mt-4">Announcement!</h4>
                    <ul class="p-2">
                        <li>Deposit Bonus 20%</li>
                        <li>Promotion Bonus 12%</li>
                    </ul>
                    <a href="/deposit" class="btn-warning btn ">Grab the Deal Now</a>
                </div>
            </div>

        </div>
    </div>
    <!-- JavaScript for Popup -->
    <script>
        
function showTaskPopup() {
    var taskPopup = document.getElementById('task-popup');
    taskPopup.style.display = 'block';
}

function closeTaskPopup() {
    var taskPopup = document.getElementById('task-popup');
    taskPopup.style.display = 'none';
}

document.getElementById('show-task-btn').addEventListener('click', showTaskPopup);

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
    <script>
        function showPopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
        }
    
        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
            // Set a cookie to indicate that the user has seen the popup
            Cookies.set('popupShown', 'true', { expires: 7 }); // Expires in 7 days
        }
    
        // Check if the popup has not been shown (cookie does not exist)
        if (!Cookies.get('popupShown')) {
            // Call showPopup after 2 seconds
            setTimeout(showPopup, 2000);
        }
    </script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</x-app-layout>
