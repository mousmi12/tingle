<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
</head>

<body>
    @include('user.navigation')
    <div class="container rounded-5 imagShadow my-5 bgcolorCom">
        <section>
            <div class="d-flex justify-content-center align-items-center py-5">

            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center align-items-center">
                    <div class="col-8">
                        <div class="text-center">
                            <h3><span class="badge" style="color: white; background-color: #5a3b36;">CONTACT US</span></h3>
                            <h6 class="mt-5"><span style="color: #5a3b36;">Contact & Reach Us!</span></h6>
                        </div>
                        <div style="width:100%">
                            <form>
                                <div class="form-group mt-5">
                                    <input type="text" placeholder="Name" id="name" class="form-control custom-input">
                                </div>
                                <div class="form-group mt-5">
                                    <input type="text" placeholder="Email" id="email" class="form-control custom-input">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="submit-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-2 d-flex justify-content-center align-items-center">
                    <div>
                        <img src="{{asset('assets/userpage/Image/contact.png')}}" style="height: 80vh; width: 100%" alt="" srcset="">
                    </div>
                </div>
            </div>

        </section>
        <section class="container py-3">
            <div class="row">
                <div class="col-sm-6 p-2 d-flex justify-content-center align-items-center">
                    <div style="width: 50%">
                        <img src="{{asset('assets/userpage/Image/contactimg.png')}}" style="height: 40vh; width: 100%" alt="" srcset="" />
                    </div>
                </div>
                <div class="col-sm-6 p-2 d-flex justify-content-center align-items-center">
                    <div class="py-3 px-3 shadow rounded" style="width: 60% ; background-color:#ac3939">
                       <p>Email : </p>
                       <p>ph : </p>
                       <p>Address : </p>
                    </div>
                </div>

            </div>
        </section>
        <section class="container">
            <div class="row">
                <iframe class="my-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="600" height="450" style="border:0;  border-radius: 30px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>
    </div>






    @include('user.footer')

</body>
</head>