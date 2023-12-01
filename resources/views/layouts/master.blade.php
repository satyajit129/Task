<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from nftmaxl.quomodothemes.website/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 17:00:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NFT MAX - NFT Dashboard Template</title>

    <link rel="icon" href="assets/img/favicon.png">

    {{-- dashboard link --}}
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/font-awesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/charts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/slickslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/formstyle.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="body-bg" style="background-image:url({{ asset('Backend/assets/img/body-bg.jpg') }})">

        @if (auth()->user()->role == 1)
            @include('layouts.inc.AdminSidebar')
        @else
            @include('layouts.inc.UserSidebar')
        @endif


        <div class="nftmax-preview__modal modal fade" id="logout_modal" tabindex="-1" aria-labelledby="logoutmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered nftmax-close__modal-close">
                <div class="modal-content nftmax-preview__modal-content">
                    <div class="modal-header nftmax__modal__header">
                        <h4 class="modal-title nftmax-preview__modal-title" id="logoutmodal">Confirm</h4>
                        <button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal"
                            aria-label="Close"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36 16.16C36 17.4399 36 18.7199 36 20.0001C35.7911 20.0709 35.8636 20.2554 35.8385 20.4001C34.5321 27.9453 30.246 32.9248 22.9603 35.2822C21.9006 35.6251 20.7753 35.7657 19.6802 35.9997C18.4003 35.9997 17.1204 35.9997 15.8401 35.9997C15.5896 35.7086 15.2189 35.7732 14.9034 35.7093C7.77231 34.2621 3.08728 30.0725 0.769671 23.187C0.435002 22.1926 0.445997 21.1199 0 20.1599C0 18.7198 0 17.2798 0 15.8398C0.291376 15.6195 0.214408 15.2656 0.270759 14.9808C1.71321 7.69774 6.02611 2.99691 13.0428 0.700951C14.0118 0.383805 15.0509 0.386897 15.9999 0C17.2265 0 18.4532 0 19.6799 0C19.7156 0.124041 19.8125 0.136067 19.9225 0.146719C27.3 0.868973 33.5322 6.21922 35.3801 13.427C35.6121 14.3313 35.7945 15.2484 36 16.16ZM33.011 18.0787C33.0433 9.77105 26.3423 3.00309 18.077 2.9945C9.78479 2.98626 3.00344 9.658 2.98523 17.8426C2.96667 26.1633 9.58859 32.9601 17.7602 33.0079C26.197 33.0577 32.9787 26.4186 33.011 18.0787Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                                <path
                                    d="M15.9309 18.023C13.9329 16.037 12.007 14.1207 10.0787 12.2072C9.60071 11.733 9.26398 11.2162 9.51996 10.506C9.945 9.32677 11.1954 9.0811 12.1437 10.0174C13.9067 11.7585 15.6766 13.494 17.385 15.2879C17.9108 15.8401 18.1633 15.7487 18.6375 15.258C20.3586 13.4761 22.1199 11.7327 23.8822 9.99096C24.8175 9.06632 26.1095 9.33639 26.4967 10.517C26.7286 11.2241 26.3919 11.7413 25.9133 12.2178C24.1757 13.9472 22.4477 15.6855 20.7104 17.4148C20.5228 17.6018 20.2964 17.7495 20.0466 17.9485C22.0831 19.974 24.0372 21.8992 25.9689 23.8468C26.9262 24.8119 26.6489 26.1101 25.4336 26.4987C24.712 26.7292 24.2131 26.3441 23.7455 25.8757C21.9945 24.1227 20.2232 22.3892 18.5045 20.6049C18.0698 20.1534 17.8716 20.2269 17.4802 20.6282C15.732 22.4215 13.9493 24.1807 12.1777 25.951C11.7022 26.4262 11.193 26.7471 10.4738 26.4537C9.31345 25.9798 9.06881 24.8398 9.98589 23.8952C11.285 22.5576 12.6138 21.2484 13.9387 19.9355C14.5792 19.3005 15.2399 18.6852 15.9309 18.023Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                            </svg></button>
                    </div>
                    <div class="modal-body nftmax-modal__body modal-body nftmax-close__body">
                        <div class="nftmax-preview__close">
                            <div class="nftmax-preview__close-img"><img
                                    src="{{ asset('Backend/assets/img/close.png') }}" alt="#"></div>
                            <h2 class="nftmax-preview__close-title">Are you sure you want to Logout <span>NETMAX admin
                                    Penal?</span></h2>
                            <div class="nftmax__item-button--group">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered--plus radius"
                                    data-bs-dismiss="modal"><span class="ntfmax__btn-textgr">Not Now</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.inc.header')


        <section class="nftmax-adashboard nftmax-show" style="min-height: 83vh;">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-9 col-12 nftmax-main__column">
                        <div class="nftmax-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script></script>


    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/slickslider.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/charts.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/final-countdown.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/main.js') }}"></script>
    <script>
        function displayImage(input) {
            var selectedImage = document.getElementById('selected-image');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    selectedImage.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    
    <script>
        jQuery(document).ready(function($) {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime(' %H : %M : %S'));
                });
            });
        });
    </script>
    <script>
        const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
        var TotalSold = 140;
        var TotalCancen = 12;
        var TotalPending = 60;
        const dataSet = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One = new Chart(ctx_side_two, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });


        const ctx_side_two_weekly = document.getElementById('myChart_Side_One_weekly').getContext('2d');
        var TotalSold = 340;
        var TotalCancen = 52;
        var TotalPending = 90;
        const dataSet_weekly = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One_weekly = new Chart(ctx_side_two_weekly, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet_weekly,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });

        const ctx_side_two_monthly = document.getElementById('myChart_Side_One_monthly').getContext('2d');
        var TotalSold = 640;
        var TotalCancen = 152;
        var TotalPending = 290;
        const dataSet_monthly = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One_monthly = new Chart(ctx_side_two_monthly, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet_monthly,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });

        const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
        var label = ["12:00 AM", "04:00 AM", "08:00 AM"];
        var data = [40, 90, 10];
        const myChart_Side_Two = new Chart(ctx_side_three, {
            type: 'line',

            data: {
                labels: label,
                datasets: [{
                    label: 'Visitor',
                    data: data,
                    backgroundColor: '#D8D8FE',
                    borderColor: '#5356FB',
                    pointRadius: 3,
                    pointBackgroundColor: '#5356FB',
                    pointBorderColor: '#5356FB',
                    borderWidth: 4,
                    tension: 0.9,
                    fill: true,
                    fillColor: '#fff',

                }]
            },

            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
        const ctx_side_three_BTC = document.getElementById('myChart_Side_Two_BTC').getContext('2d');
        var label = ["12:00 AM", "04:00 AM", "08:00 AM"];
        var data = [30, 80, 20];
        const myChart_Side_Two_BTC = new Chart(ctx_side_three_BTC, {
            type: 'line',

            data: {
                labels: label,
                datasets: [{
                    label: 'Visitor',
                    data: data,
                    backgroundColor: '#D8D8FE',
                    borderColor: '#5356FB',
                    pointRadius: 3,
                    pointBackgroundColor: '#5356FB',
                    pointBorderColor: '#5356FB',
                    borderWidth: 4,
                    tension: 0.9,
                    fill: true,
                    fillColor: '#fff',

                }]
            },

            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
    </script>
    <script>
        const ctx = document.getElementById('myChart_one').getContext('2d');
        var day = ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"];
        var avgSell = [90, 55, 80, 25, 65, 40, 95];
        var totalSell = [85, 80, 50, 75, 45, 55, 80];
        const myChart_one = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: day,
                datasets: [{
                    label: 'AVG Sale',
                    data: avgSell,
                    backgroundColor: [
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                    ],

                    fill: true,
                    tension: 0.4,
                    borderWidth: 0,
                    borderSkipped: false,
                    borderRadius: 3,
                    barPercentage: 0.4,
                    categoryPercentage: 0.4,
                }, {
                    label: 'Total Sell',
                    data: totalSell,
                    backgroundColor: [
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                    ],
                    borderWidth: 0,
                    borderSkipped: false,
                    borderRadius: 3,
                    categoryPercentage: 0.4,
                    barPercentage: 0.4
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            drawBorder: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }
        });

        const ctx_two = document.getElementById('myChart_two').getContext('2d');
        var day = ["Jan 1", "Jan 2", "Jan 3", "Jan 4", "Jan 5", "Jan 6", "Jan 7", "Jan 8", "Jan 9", "Jan 10", "Jan 11",
            "Jan 12", "Jan 13", "Jan 14", "Jan 15"
        ];
        var visitor = [50, 20, 45, 15, 55, 20, 60, 20, 70, 45, 64, 20, 72, 22, 66];
        const myChart_two = new Chart(ctx_two, {
            type: 'line',

            data: {
                labels: day,
                datasets: [{
                    label: 'Visitor',
                    data: visitor,
                    backgroundColor: '#FAECFF',
                    borderColor: '#DE3DF8',
                    pointRadius: 5,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#AE8FF7',
                    tension: 0.6,
                    borderWidth: 4,
                    fill: true,
                    fillColor: '#fff',
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });


        const ctx_two_monthly = document.getElementById('myChart_two_monthly').getContext('2d');
        var day = ["Jan 1", "Jan 2", "Jan 3", "Jan 4", "Jan 5", "Jan 6", "Jan 7", "Jan 8", "Jan 9", "Jan 10", "Jan 11",
            "Jan 12", "Jan 13", "Jan 14", "Jan 15", "Jan 16", "Jan 17", "Jan 18", "Jan 19", "Jan 20", "Jan 21",
            "Jan 22", "Jan 23", "Jan 24", "Jan 25", "Jan 26", "Jan 27", "Jan 28", "Jan 29", "Jan 30"
        ];
        var visitor = [10, 20, 35, 15, 55, 20, 60, 20, 70, 45, 64, 20, 72, 22, 66, 50, 20, 45, 15, 55, 20, 60, 20, 70, 45,
            64, 20, 72, 22, 66
        ];
        const myChart_two_monthly = new Chart(ctx_two_monthly, {
            type: 'line',

            data: {
                labels: day,
                datasets: [{
                    label: 'Visitor',
                    data: visitor,
                    backgroundColor: '#FAECFF',
                    borderColor: '#DE3DF8',
                    pointRadius: 5,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#AE8FF7',
                    tension: 0.6,
                    borderWidth: 4,
                    fill: true,
                    fillColor: '#fff',
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
        const ctx_two_weekly = document.getElementById('myChart_two_weekly').getContext('2d');
        var day = ["Jan 1", "Jan 2", "Jan 3", "Jan 4", "Jan 5", "Jan 6", "Jan 7"];
        var visitor = [50, 20, 45, 15, 55, 20, 60];
        const myChart_two_weekly = new Chart(ctx_two_weekly, {
            type: 'line',

            data: {
                labels: day,
                datasets: [{
                    label: 'Visitor',
                    data: visitor,
                    backgroundColor: '#FAECFF',
                    borderColor: '#DE3DF8',
                    pointRadius: 5,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#AE8FF7',
                    tension: 0.6,
                    borderWidth: 4,
                    fill: true,
                    fillColor: '#fff',
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
    </script>
</body>

<!-- Mirrored from nftmaxl.quomodothemes.website/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 17:01:09 GMT -->

</html>
