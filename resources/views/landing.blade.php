@extends('layout.headerfooter') @section('title') AISE 2018 @endsection @section('link')
<link rel="stylesheet" href="{{ url('/css/landing.css') }}">

<!--TIMELINE-->
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="{{ url('css/timeline.css') }}">
<!--END TIMELINE-->

<script src="{{ url('/js/jssor.slider.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
          $AutoPlay: 1,
          $SlideWidth: 720,
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
@endsection @section('content')
<div class="landing">
    <section id="section1" class="cn-section">
        <div class="bg">
            <img class="bg-img" src="{{ url('/img/section-01.png') }}" style="bottom: 0" alt="">
        </div>
        <div id="particles-js">
            <div class="position-abs">
                <div class="d-flex flex-column">
                    <p class="judul-aise-landing"><b>AISE 2018</b></p>
                    <div class="flex-item img-logo">
                        <img src="{{ url('/img/logo-aise-nobg.png') }}" style="width: 200px" alt="">
                    </div>
                    <div class="flex-item tombol" style="text-align: center">
                        <button type="button" class="btn btn-warning btn-lg btn-alpro">ALPRO</button>
                        <button type="button" class="btn btn-warning btn-lg">AISS</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="cn-section">
        <div class="bg-2">
            <img class="bg-img" src="{{ url('/img/section-02.png') }}" style="top: 0" alt="">
        </div>
        <div id="particles-js-2">
            <div class="position-abs">
                <div class="d-flex flex-column">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100">
                                    <div class="what-is">
                                        <h1><span>WHAT IS AISE?</span></h1>
                                        <div class="penjelasan" align="center">
                                            <div>
                                                ALPRO (Airlangga Logic and Programming Olympic) adalah sebuah lomba logika dan pemrograman untuk anak SMA/SMK sederajat tingkat Jawa-Bali. ALPRO merupakan sebuah acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa S1 Sistem Informasi Universitas
                                                Airlangga sejak tahun 2016. ALPRO merupakan awal dari serangkaian acara AISE 2018 yang memiliki tujuan utama untuk memperkenalkan S1 Sistem Informasi UNAIR ke anak SMA/SMK sederajat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <div class="what-is">
                                        <h1><span>WHAT IS AISE?</span></h1>
                                        <div class="penjelasan" align="center">
                                            <div>
                                                ALPRO (Airlangga Logic and Programming Olympic) adalah sebuah lomba logika dan pemrograman untuk anak SMA/SMK sederajat tingkat Jawa-Bali. ALPRO merupakan sebuah acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa S1 Sistem Informasi Universitas
                                                Airlangga sejak tahun 2016. ALPRO merupakan awal dari serangkaian acara AISE 2018 yang memiliki tujuan utama untuk memperkenalkan S1 Sistem Informasi UNAIR ke anak SMA/SMK sederajat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <div class="what-is">
                                        <h1><span>WHAT IS AISE</span></h1>
                                        <div class="penjelasan" align="center">
                                            <div>
                                                ALPRO (Airlangga Logic and Programming Olympic) adalah sebuah lomba logika dan pemrograman untuk anak SMA/SMK sederajat tingkat Jawa-Bali. ALPRO merupakan sebuah acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa S1 Sistem Informasi Universitas
                                                Airlangga sejak tahun 2016. ALPRO merupakan awal dari serangkaian acara AISE 2018 yang memiliki tujuan utama untuk memperkenalkan S1 Sistem Informasi UNAIR ke anak SMA/SMK sederajat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section3" class="cn-section">
        <div class="bg-4">
            <img class="bg-img" src="{{ url('/img/meteor2.png') }}" alt="">
        </div>
        <div class="" id="particles-js-3">
            <div class="position-abs">
              <div class="tml">
                  <div class="d-block judul-tml">
                      <h1><span style="color:white">TIMELINE AISE</span></h1>
                  </div>
                  <div class="container">
                <div class="cd-horizontal-timeline">
                <div class="timeline">
                  <div class="events-wrapper">
                    <div class="events">
                      <ol>
                        <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                        <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                        <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                        <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                        <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                        <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                        <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                        <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                        <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                        <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                        <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                      </ol>

                      <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                  </div> <!-- .events-wrapper -->

                  <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                  </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->

                <div class="events-content">
                  <ol>
                    <li class="selected" data-date="16/01/2014">
                      <em>January 16th, 2014</em>
                      <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="28/02/2014">
                      <em>February 28th, 2014</em>
                      <div align="justify">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="20/04/2014">
                      <em>March 20th, 2014</em>
                      <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="20/05/2014">
                      <em>May 20th, 2014</em>
                      <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="09/07/2014">
                      <em>July 9th, 2014</em>
                      <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="30/08/2014">
                      <em>August 30th, 2014</em>
                      <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </li>

                    <li data-date="15/09/2014">
                      <em>September 15th, 2014</em>
                        <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="01/11/2014">
                      <em>November 1st, 2014</em>
                        <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="10/12/2014">
                      <em>December 10th, 2014</em>
                        <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="19/01/2015">
                      <em>January 19th, 2015</em>
                        <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>

                    <li data-date="03/03/2015">
                      <em>March 3rd, 2015</em>
                        <div align="justify">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                      </p>
                    </div>
                    </li>
                  </ol>
                </div> <!-- .events-content -->
              </div>
            </div>
            </div>
        </div>
    </section>
    <section id="section4" class="cn-section">
        <div class="bg-3">
            <img class="bg-img" src="{{ url('/img/bumi.png') }}" alt="">
        </div>
        <div id="particles-js-4">
            <div class="position-abs">
                <div class="syarat d-flex flex-column">
                    <div class="container">
                        <h1><span>Syarat dan Ketentuan</span></h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h4 style="color: white"><span>ALPRO</span></h4>
                                <div class="">
                                    <ul class="syarat_items" style="list-style-type:none">
                                        <li class="syarat_item clearfix">
                                            <span>1</span>
                                            <p>Peserta adalah manusia</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>2</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>3</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>4</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>5</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h4 style="color: white"><span>AISS</span></h4>
                                <div class="">
                                    <ul class="syarat_items" style="list-style-type:none">
                                        <li class="syarat_item clearfix">
                                            <span>1</span>
                                            <p>Peserta adalah manusia</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>2</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>3</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>4</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                        <li class="syarat_item clearfix">
                                            <span>5</span>
                                            <p>Peserta tidak dapat diwakilkan oleh bapak, ibu, guru, apalagi kakeknya</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section5" class="cn-section">
        <div class="bg-5">
            <img class="bg-img" src="{{ url('/img/wave.png') }}" alt="">
        </div>
        <div id="particles-js-5">
            <div class="position-abs">
                <div class="hadiah">
                    <div class="container">
                        <h1 style="text-align: center"><span>Hadiah Alpro</span></h1>
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-5 col-7 col-md-3">
                                <div class="kotak-hadiah">
                                    <div class="kotak-hadiah-body">
                                        <img src="{{ url('/img/medal.png') }}" class="img-center">
                                        <br>
                                        <h3 class="kotak-hadiah-title">Juara 1</h3>
                                        <p class="kotak-hadiah-text">Piala + Rp. 500.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-5 col-7 col-md-3">
                                <div class="kotak-hadiah">
                                    <div class="kotak-hadiah-body">
                                        <img src="{{ url('/img/medal-silver.png') }}" class="img-center">
                                        <br>
                                        <h3 class="kotak-hadiah-title">Juara 2</h3>
                                        <p class="kotak-hadiah-text">Piala + Rp. 500.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-5 col-7 col-md-3">
                                <div class="kotak-hadiah">
                                    <div class="kotak-hadiah-body">
                                        <img src="{{ url('/img/medal-bronze.png') }}" class="img-center">
                                        <br>
                                        <h3 class="kotak-hadiah-title">Juara 3</h3>
                                        <p class="kotak-hadiah-text">Piala + Rp. 500.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section6" class="cn-section">
        <div id="particles-js-6">
            <div class="position-abs">
                <div class="gallery">
                    <div class="container">
                        <h1 style="text-align:center;"><span>Tahun Lalu di ALPRO X AISS</span></h1>
                        <div id="jssor_1">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin">
                                <img src="../svg/loading/static-svg/spin.svg" />
                            </div>
                            <div data-u="slides" class="gallery-slides">
                                <div>
                                    <img data-u="image" src="{{url('/img/gallery/001.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('/img/gallery/002.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('/img/gallery/003.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('/img/gallery/004.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('/img/gallery/005.jpg')}}" />
                                </div>
                            </div>
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb051" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                <div data-u="prototype" class="i">
                                    <svg viewBox="0 0 16000 16000">
                                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                    </svg>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora051 gallery-arrowleft" style="" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewBox="0 0 16000 16000">
                                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora051 gallery-arrowright" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewBox="0 0 16000 16000">
                                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section7" class="cn-section">
        <div class="bg-7">
            <img class="bg-img" src="{{ url('/img/gelombang.png') }}" alt="">
        </div>
        <div id="particles-js-7">
            <div class="position-abs">
                <div class="container">
                    <div class="narahubung">
                        <h1 style="text-align:center"><span>Narahubung</span></h1>
                        <div class="row justify-content-center">
                            <div class="col-8 col-sm-6 col-lg-6 col-md-6 nara">
                                <div class="number">
                                    082244430796 (Hendri)
                                </div>
                                <div class="number">
                                    082244430796 (Hendri)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ayr">
                        <h1 style="text-align:center"><span>Are You Ready?</span></h1>
                        <div class="btn-ayr">
                            <button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">ALPRO</button>
                            <button class="btn">AISS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection @section('script')
<script src="{{ url('/js/particles.js') }}"></script>
<script src="{{ url('/js/particles-run.js') }}"></script>
<script>
    var idCard = ["#card1", "#card5", "#card3", "#card9", "#card6", "#card2", "#card4", "#card8", "#card10", "#card7"];
    $(document).ready(function() {
        animateGallery(0, "#card10");
        $('button[data-toggle="popover"]').popover({
            placement : 'bottom',
            html : true,
            content : '<div class="media"><a href="#" class="pull-left"><img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image"></a><div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div></div>'
        });
    });

    function getRotate(id) {
        var el = $(id).get(0);
        var st = window.getComputedStyle(el, null);
        var tr = st.getPropertyValue("transform");
        console.log(tr);
        var values = tr.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var c = values[2];
        var d = values[3];

        var scale = Math.sqrt(a * a + b * b);

        console.log('Scale: ' + scale);

        var sin = b / scale;
        // next line works for 30deg but not 130deg (returns 50);
        // var angle = Math.round(Math.asin(sin) * (180/Math.PI));
        var angle = Math.round(Math.asin(sin) * (180 / Math.PI));
        // angle = 360 - angle;
        return angle;
    }

    function animateGallery(id, idTemp) {
        var positionCard = $(idCard[id]).position();

        var positionTemp = $(idTemp).position();
        var angle = getRotate(idTemp);

        console.log('angle ' + angle);
        var temp = idCard[id];

        $(idCard[id]).animate({
            left: positionTemp.left,
            right: positionTemp.right,
            top: positionTemp.top,
            bottom: positionTemp.bottom,
            rotate: '100deg'
        }, 1000, function() {
            id = id % 9;
        });
    }
</script>
<!--TIMELINE-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js'></script>
<script  src="{{ url('js/timeline.js') }}"></script>
<!--END TIMELINE-->



<script type="text/javascript">jssor_1_slider_init();</script>
@endsection
