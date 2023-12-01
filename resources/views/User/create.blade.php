@extends('layouts.master')


@section('content')
    <div class="header-div mt-2 text-center">
        <div class="row">
            <div class="col-3">
                <div class="khulna-logo">
                    <img src="{{ asset('Backend/kcc.jpg') }}" alt="Logo">
                </div>
            </div>
            <div class="col-6">
                <div class="heading">
                    <h2>Khulna City Corporation</h2>
                    <h3>WebSite: www.khulnacity.gov.bd</h3>
                    <div class="heading-details">
                        <h3>Application Form Of trade licence Issue/Renewal</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="">
                    <div class="nftmax-ptabs__form-update">
                        <div class="nftmax-ptabs__sidebar">

                            <div class="nftmax-ptabs__ssingle nftmax-ptabs__scover">

                                <div class="nftmax-ptabs__sauthor">
                                    <div class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb"
                                        style="width: 75% !important;">
                                        <img id="selected-image" src="{{ asset('Backend/assets/img/profile-cover.png') }}"
                                            alt="#">
                                        <label for="file-input"><span class="nftmax-ptabs__sedit">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                                        fill="white">
                                                    </path>
                                                    <path
                                                        d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                        fill="white">
                                                    </path>
                                                </svg>
                                            </span></label>
                                        <input id="file-input" type="file" onchange="displayImage(this)" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-section mt-4">
        <div class="row">
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">First
                        Name </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Mother Name</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Father
                        Name </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Spouse Name(If Applicable)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 ">
                    <h3 style="color: red">Present Address</h3>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">(Village/Road/Holding-No:)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Zone</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Ward No</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Office</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Code</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Upazila</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">District</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Country</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 ">
                    <h3 style="color: red">Parmanent Address</h3>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">(Village/Road/Holding-No:)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Zone</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Ward No</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Office</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Code</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Upazila</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">District</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Country</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>

            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">First
                        Name </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">First
                        Name </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Mobile No</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Mobile No"
                        required="required">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Email</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Email" required="required">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Nationality</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">NID No/Birth Registration</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">BIN(If Applicable)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="col-6">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">TIN(If Applicable)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Business
                        Name </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 ">
                    <h3 style="color: red"> Address Of Business Organization</h3>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">(Village/Road/Holding-No:)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Zone</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Ward No</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Office</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Post Code</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Upazila</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">District</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Country</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Business
                        Type </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Business
                        Capital </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Business
                        Starting Days /Pobablr Date </label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">OwnerShip Of Business Organization (Own/Rent)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>
            <div class="col-12">
                <div class="nftmax__item-form--group nftmax-last-name">
                    <label class="nftmax__item-label">Size Of Identifying SignBoard (In SQuare Feet)</label>
                    <input class="nftmax__item-input" type="text" placeholder="Enter Your Name" required="required">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="attachment">
                <div class="col-12">
                    <div class="nftmax__item-form--group nftmax-last-name">
                        <label class="nftmax__item-label">Attach PhotoCopy Of Birth Register</label>
                        <input class="nftmax__item-input" type="file" placeholder="Enter Your Name"
                            required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="nftmax__item-button--group nftmax__ptabs-bottom">
            <button class="nftmax__item-button--single nftmax__item-button--cancel">Save As Draft</button>
            <a class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius " href=""
                type="submit">
                Submit</a>
        </div>
    </div>
@endsection
