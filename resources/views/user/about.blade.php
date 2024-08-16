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
        <img src="{{asset('assets/userpage/Image/aboutus.png')}}" alt="" srcset="" style="width: 250px;" />
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
          <div>
            <div class="d-flex justify-content-center align-items-center py-3">
              <img src="{{asset('assets/userpage/Image/aboutme.png')}}" alt="" srcset="" style="width: 200px;" />
            </div>
            <p class="px-4 fontStyle" style="font-size: 30px;">Hi, I’m Mousmi Muthalib! By day, I’m a software developer, but by night, I’m a passionate crafter. I create magical handmade products using yarn and resin. Thank you for supporting my small business and keeping my dream alive!</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center ">
          <div style="width: 85%">
            <img src="{{asset('assets/userpage/Image/about2.png')}}" style="height: 80vh; width: 100%" alt="" srcset="" />
          </div>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
          <div style="width: 85%">
            <img src="{{asset('assets/userpage/Image/about1.png')}}" style="height: 80vh; width: 100%" alt="" srcset="" />
          </div>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
          <div>
            <div class="d-flex justify-content-center align-items-center py-3">
              <img src="{{asset('assets/userpage/Image/abouttingle.png')}}" alt="" srcset="" style="width: 200px;" />
            </div>
            <p class="fontStyle px-4"  style="font-size: 30px; ">Tingle is a haven for unique, handmade creations crafted from yarn and resin. Each piece is designed with meticulous care and creativity, aiming to bring a touch of sparkle and warmth to your life. We believe in the magic of handmade art and the joy it can bring. Thank you for being a part of our journey!</p>
          </div>
        </div>
      </div>
    </section>
  </div>






  @include('user.footer')

</body>
</head>