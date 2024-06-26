@include('admin.header')

<body>


    <div id="root">
        <div class="wrapper">
            <div class="main-panel" data="blue">

                <div class="col-12">


                    <div class="ml-auto mr-auto col-md-6 col-lg-4 col">
                        @if(session()->has('message'))<h6>{{session()->get('message')}}</h6>@endif
                        <div class="card">
                            <form method="POST" action="{{ route('admin.dologin') }}">
                                @csrf
                                <div class="card-header">
                                    <h3 class="card-title">Login</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="">Email</label>
                                        <input placeholder="Email" name="email" type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input placeholder="Password" name="password" type="password" class="form-control">
                                    </div>
                                    {{-- <span>Don't have an account? <a href="/auth/register">Register</a></span>--}}
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <button type="submit" class="btn-fill btn btn-primary">Login</button>
                                    <button type="button" class="btn-fill btn btn-primary">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7c0651b50925898c&quot;,&quot;version&quot;:&quot;2023.3.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;,&quot;si&quot;:100}" crossorigin="anonymous">

    </script>

    <style>
        #ofBar {
            background: #fff;
            z-index: 999999999;
            font-size: 16px;
            color: #333;
            padding: 16px 40px;
            font-weight: 400;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 40px;
            width: 80%;
            border-radius: 8px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
        }

        #ofBar-logo img {
            height: 50px;
        }

        #ofBar-content {
            display: inline;
            padding: 0 15px;
        }

        #ofBar-right {
            display: flex;
            align-items: center;
        }

        #ofBar b {
            font-size: 15px !important;
        }

        #count-down {
            display: initial;
            padding-left: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        #close-bar {
            font-size: 17px;
            opacity: 0.5;
            cursor: pointer;
            color: #808080;
            font-weight: bold;
        }

        #close-bar:hover {
            opacity: 1;
        }

        #btn-bar {
            background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
            color: #fff;
            border-radius: 4px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 12px;
            opacity: .95;
            margin-right: 20px;
            box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
        }

        #btn-bar,
        #btn-bar:hover,
        #btn-bar:focus,
        #btn-bar:active {
            text-decoration: none !important;
            color: #fff !important;
        }

        #btn-bar:hover {
            opacity: 1;
        }

        #btn-bar span,
        #ofBar-content span {
            color: red;
            font-weight: 700;
        }

        #oldPriceBar {
            text-decoration: line-through;
            font-size: 16px;
            color: #fff;
            font-weight: 400;
            top: 2px;
            position: relative;
        }

        #newPrice {
            color: #fff;
            font-size: 19px;
            font-weight: 700;
            top: 2px;
            position: relative;
            margin-left: 7px;
        }

        #fromText {
            font-size: 15px;
            color: #fff;
            font-weight: 400;
            margin-right: 3px;
            top: 0px;
            position: relative;
        }

        @media(max-width: 991px) {}

        @media (max-width: 768px) {
            #count-down {
                display: block;
                margin-top: 15px;
            }

            #ofBar {
                flex-direction: column;
                align-items: normal;
            }

            #ofBar-content {
                margin: 15px 0;
                text-align: center;
                font-size: 18px;
            }

            #ofBar-right {
                justify-content: flex-end;
            }
        }
    </style>

    <script type="text/javascript" id="">
        function setCookie(b, d, c) {
            var a = new Date;
            a.setTime(a.getTime() + 864E5 * c);
            c = "expires\x3d" + a.toUTCString();
            document.cookie = b + "\x3d" + d + ";" + c + ";path\x3d/"
        }

        function readCookie(b) {
            b += "\x3d";
            for (var d = document.cookie.split(";"), c = 0; c < d.length; c++) {
                for (var a = d[c];
                    " " == a.charAt(0);) a = a.substring(1, a.length);
                if (0 == a.indexOf(b)) return a.substring(b.length, a.length)
            }
            return null
        }

        function createOfferBar() {
            var b = document.createElement("div");
            b.setAttribute("id", "ofBar");
            b.innerHTML = "\x3cdiv id\x3d'ofBar-logo'\x3e \x3cimg alt\x3d'creative-tim-logo' src\x3d'https://s3.amazonaws.com/creativetim_bucket/static-assets/logo-ct-black.png'\x3e\x3c/div\x3e\x3cdiv id\x3d'ofBar-content'\x3e\ud83c\udf37 Select your favorite \x3cb\x3eSpring Bundle\x3c/b\x3e and enjoy a whopping \x3cb\x3e85% discount\x3c/b\x3e on its price \u23f0 3 Days Left\x3c/div\x3e\x3cdiv id\x3d'ofBar-right'\x3e\x3ca href\x3d'https://www.creative-tim.com/campaign?ref\x3dct-demos' target\x3d'_blank' id\x3d'btn-bar'\x3eView Offer\x3c/a\x3e\x3ca id\x3d'close-bar'\x3e\u00d7\x3c/a\x3e\x3c/div\x3e";
            document.body.insertBefore(b,
                document.body.firstChild)
        }

        function closeOfferBar() {
            document.getElementById("ofBar").setAttribute("style", "display:none");
            setCookie("view_offer_bar", "true", 1)
        }
        var value = readCookie("view_offer_bar");
        null == value && (createOfferBar(), document.getElementById("close-bar").addEventListener("click", closeOfferBar));
    </script>
    <script type="text/javascript" id="">
        ! function(d, g, e) {
            d.TiktokAnalyticsObject = e;
            var a = d[e] = d[e] || [];
            a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");
            a.setAndDefer = function(b, c) {
                b[c] = function() {
                    b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
            a.instance = function(b) {
                b = a._i[b] || [];
                for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
                return b
            };
            a.load = function(b, c) {
                var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
                a._i = a._i || {};
                a._i[b] = [];
                a._i[b]._u = f;
                a._t = a._t || {};
                a._t[b] = +new Date;
                a._o = a._o || {};
                a._o[b] = c || {};
                c = document.createElement("script");
                c.type = "text/javascript";
                c.async = !0;
                c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
                b = document.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(c, b)
            };
            a.load("CC6UAQBC77U7GVKHLC4G");
            a.page()
        }(window, document, "ttq");
    </script>
    <iframe id="_hjSafeContext_82198005" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
</body>