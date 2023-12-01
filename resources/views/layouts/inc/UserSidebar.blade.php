<div class="nftmax-smenu">

    <div class="admin-menu">

        <div class="logo">
            <a href="index.html">
                <img class="nftmax-logo__main" src="{{ asset('Backend/assets/img/logo-white.png') }}" alt="#">
            </a>
            <div class="nftmax__sicon close-icon"><img src="{{ asset('Backend/assets/img/menu-toggle.svg') }}" alt="#"></div>
        </div>

        <div class="admin-menu__one">
            <h4 class="admin-menu__title nftmax-scolor">Menu</h4>

            <div class="menu-bar">
                <ul class="menu-bar__one">
                    <li class="">
                        <a href="{{ route('user.dashboard') }}">
                            <span class="menu-bar__text">
                                <span class="nftmax-menu-icon nftmax-svg-icon__v1">
                                    <svg class="nftmax-svg-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M0.800781 2.60005V7.40005H7.40078V0.800049H2.60078C2.12339 0.800049 1.66555 0.989691 1.32799 1.32726C0.990424 1.66482 0.800781 2.12266 0.800781 2.60005H0.800781Z">
                                        </path>
                                        <path d="M13.4016 0.800049H8.60156V7.40005H15.2016V2.60005C15.2016 2.12266 15.0119 1.66482 14.6744 1.32726C14.3368 0.989691 13.879 0.800049 13.4016 0.800049V0.800049Z">
                                        </path>
                                        <path d="M0.800781 13.4001C0.800781 13.8775 0.990424 14.3353 1.32799 14.6729C1.66555 15.0105 2.12339 15.2001 2.60078 15.2001H7.40078V8.6001H0.800781V13.4001Z">
                                        </path>
                                        <path d="M8.60156 15.2001H13.4016C13.879 15.2001 14.3368 15.0105 14.6744 14.6729C15.0119 14.3353 15.2016 13.8775 15.2016 13.4001V8.6001H8.60156V15.2001Z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="menu-bar__name">Dashboard</span>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="{{ route('user.dashboard') }}">
                        <a href="">
                            <span class="menu-bar__text">
                                <span class="nftmax-menu-icon nftmax-svg-icon__v1">
                                    <svg class="nftmax-svg-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M0.800781 2.60005V7.40005H7.40078V0.800049H2.60078C2.12339 0.800049 1.66555 0.989691 1.32799 1.32726C0.990424 1.66482 0.800781 2.12266 0.800781 2.60005H0.800781Z">
                                        </path>
                                        <path d="M13.4016 0.800049H8.60156V7.40005H15.2016V2.60005C15.2016 2.12266 15.0119 1.66482 14.6744 1.32726C14.3368 0.989691 13.879 0.800049 13.4016 0.800049V0.800049Z">
                                        </path>
                                        <path d="M0.800781 13.4001C0.800781 13.8775 0.990424 14.3353 1.32799 14.6729C1.66555 15.0105 2.12339 15.2001 2.60078 15.2001H7.40078V8.6001H0.800781V13.4001Z">
                                        </path>
                                        <path d="M8.60156 15.2001H13.4016C13.879 15.2001 14.3368 15.0105 14.6744 14.6729C15.0119 14.3353 15.2016 13.8775 15.2016 13.4001V8.6001H8.60156V15.2001Z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="menu-bar__name">My Application</span>
                            </span>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

</div>