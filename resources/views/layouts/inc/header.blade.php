<header class="nftmax-header">
    <div class="container">
        <div class="row g-50">
            <div class="col-12">

                <div class="nftmax-header__inner">
                    <div class="nftmax__sicon close-icon d-xl-none"><img src="{{ asset('Backend/assets/img/menu-toggle.svg') }}"
                            alt="#"></div>
                    <div class="nftmax-header__left">

                        <div class="nftmax-header__form">
                            <form class="nftmax-header__form-inner" action="#">
                                <button class="search-btn" type="submit"><img src="{{ asset('Backend/assets/img/search.png') }}"
                                        alt="#"></button>
                                <input name="s" value type="text" placeholder="Search items, collections...">
                            </form>
                        </div>

                    </div>
                    <div class="nftmax-header__right">
                        <div class="nftmax-header__group">
                            <div class="nftmax-header__group-two">
                                <div class="nftmax-header__right">
                                    <div class="nftmax-header__author">
                                        <div class="nftmax-header__author-img"><img
                                                src="{{ asset('Backend/assets/img/profile-pic.png') }}" alt="#"></div>
                                        <div class="nftmax-header__author-content">
                                            <h4 class="nftmax-header__author-title">{{ auth()->user()->name }}</h4>
                                            <p class="nftmax-header__author-text v1"><a href="#">{{ auth()->user()->email }}</a>
                                            </p>
                                        </div>

                                        <div class="nftmax-balance nftmax-profile__hover">
                                            <h3 class="nftmax-balance__title">My Profile</h3>
                                            <ul class="nftmax-balance_list">
                                                    <div class="nftmax-balance-info">
                                                        <div
                                                            class="nftmax-balance__img nftmax-profile__img-five">
                                                            <img src="{{ asset('Backend/assets/img/profile-5.png') }}" alt="#">
                                                        </div>
                                                        <h4 class="nftmax-balance-name"><a data-bs-toggle="modal" data-bs-target="#logout_modal"
                                                                href="load-login.html">Log Out</a></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>