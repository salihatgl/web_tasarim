@extends('layouts.default') <!--view dosyasını genişletir -->
@section('content')   <!-- yield ile içerik eklemek için kullanılır. -->
<div style="text-align: center; color:#6d89a2">
        <h5>Villa Aphrodite</h5>
        <p style="font-size: 12px;">Waterfront Vacation RentalWaterfront Vacation Rental</p>
    </div>
    <div class="row mb-5">
        <div class="col-8">
            <img src="https://static.wixstatic.com/media/9c608a_17e34f8404d748caa7c7d854dc658833.jpg/v1/fill/w_1164,h_978,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9c608a_17e34f8404d748caa7c7d854dc658833.jpg"
                width="80%" alt="" style="margin-left: 200px;">
        </div>
        <div class="col-4">
            <div
                style="background-color: #9dbbdf; color:white; width:351px;padding:50px;margin-top: 50px; margin-left:-150px">
                <p>YOUR PRIVATE GETAWAY IN MYKONOS. </p>
                <p>
                    I'm a paragraph. Click here to add your own text and edit me. It’s easy.
                    Just click “Edit Text” or double click me to add your own content and make
                    changes to the font. I’m a great place for you to tell a story and let your users know a little more
                    about you.
                </p>
            </div>
        </div>
    </div>

    <div style="width: 100%; background-color:#9dbbdf; font-size:18px; height:500px;color:white; margin-bottom: 300px;"
        class="pt-5">
        <div class="row mx-auto " style="width: 800px;">
            <div class="col-5 me-5">
                <p>I COULD NOT IMAGINE A BETTER CHOICE</p>
                <p style="font-size: 12px;">"I'm a testimonial. Click to edit me and add text that says something nice
                    about
                    you and your services. Let your customers review you and tell their friends how great you are."</p>
                <p style="color: black;">/ Martha Stanton</p>
            </div>
            <div class="col-5">
                <p>PERFECT HONEYMOON!</p>
                <p style="font-size: 12px;">"I'm a testimonial. Click to edit me and add text that says something nice
                    about
                    you and your services. Let your customers review you and tell their friends how great you are."</p>
                <p style="color: black;">/ Adam & Deborah Kant</p>
            </div>
        </div>
        <div class="row mx-auto   mt-5 mb-5" style="width: 800px;">
            <div class="col-5 me-5">
                <p>A HOME AWAY FROM HOME</p>
                <p style="font-size: 12px;">"I'm a testimonial. Click to edit me and add text that says something nice
                    about
                    you and your services. Let your customers review you and tell their friends how great you are."</p>
                <p style="color: black;">/ Danielle Florence</p>
            </div>
            <div class="col-5">

                <img src="https://static.wixstatic.com/media/9c608a_fdc49aca2e4547a382ac0735f977055f.jpg/v1/fill/w_487,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/9c608a_fdc49aca2e4547a382ac0735f977055f.jpg"
                    alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-5">
                <div class="embed-responsive embed-responsive-100x400px" style="float: left;">
                    <!-- Google map -->
                    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px;">
                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" width="500px" height="350px" style="border:0; margin-left:200px"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div style="text-align:center;">
                <p>Villa Aphrodite is located in Mykonos,</p>
                <p>the crowned jewel of the Cyclades in the South Aegean Sea.</p>
                <p>/</p>
                <p>500 Terry Francine Street</p>
                <p>San Francisco, CA 94158 / info@mysite.com</p><br><br>
                <div style="color: #6d89a2;">
                    <b><u>
                            <p>ANY QUESTIONS? CALL US AT:</p>
                            <p>1-800-000-0000</p>
                        </u></b><br>
                </div>
            </div>
        </div>

        <div>
        </div>
        
    </div>
    @stop