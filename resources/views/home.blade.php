@extends('layouts.app')

@section('content')
<div class="wrapper">
<div class="container-fluid">
<div class="container">
<!--<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>-->
    <section class="sec2">
                <div class="row">
                    <div class="col-sm-5 mgt10px"> 
                        <div class="">
                           <!-- <div class="col-sm-12">&nbsp;</div>-->
                            <div class="sec3 pdng0">
                                <div class="">
                                    <div class="bdr1p2">
                                        <h2 class="mgt20pxImp fsize30p h2clrylw">स्वागत है  &ldquo;<span>Urban</span> STeP&rdquo;</h2>

                                        <div class="mnheight500px">
                                            <p>“शहरी कदम” (Urban STeP) वार्ड स्तर पर योजना और विकास से संबंधित विभिन्न संगठनों के साथ बातचीत के लिए एक हितधारकों का मंच है।</p>

                                            <p class="mgt0px">यह प्लेटफॉर्म हितधारकों  को सक्षम बनाता है &#39;</p>

                                            <ul class="weulliist">
                                                <li>उनकी राय जानने के लिए, आवश्यकताएं प्रदान करने के लिए, विभिन्न वार्डों की योजना पर सुझाव और प्रतिक्रिया जानने के लिए| &nbsp;</li>
                                                <li>बेहतर प्रशासन के लिए लोगों और सरकारी एजेंसियों के बीच की खाई को पाटना होगा| </li>
                                                <li>स्थानीय क्षेत्र को प्रभावित करने वाली घटनाओं, विचारों और कार्यों के लिए एक व्यापक मार्गदर्शक भी होगा।                      </li>
                                            </ul>

                                            <p>सहभागी नियोजन एक शहरी नियोजन प्रतिमान है जो कुशल और उत्तरदायी शहरी नियोजन या सामुदायिक-स्तरीय नियोजन प्रक्रियाओं के लिए स्थानीय क्षेत्र योजना तैयार करने के प्रारंभिक चरण से स्थानीय समुदाय को शामिल करने की सुविधा प्रदान करता है। पार्टिसिपेटरी स्ट्रेटेजिक प्लानिंग प्रोसेस एक सर्वसम्मति-निर्माण दृष्टिकोण है, जो समुदाय को उनके विचारों को आवाज़ देने में सक्षम बनाता है कि वे कैसे चाहते हैं कि उनका स्थानीय क्षेत्र अगले कुछ वर्षों में विकसित हो। भागीदारी योजना पद्धति की जड़ें संयुक्त राज्य अमेरिका में हैं जिसने वर्षों में पश्चिमी यूरोपीय देशों को भी प्रभावित किया है।</p>
                                            <p><a href="{{url('know-your-area')}}" class="btn btn-default btnKura">अपने क्षेत्र को जाने</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 mgt10px">
                        <section class="sec4 mgt20px">
                            <!-- <div class="container-fluid"><div class="container"> -->
                                <div class="bdr1pxoverflow">
                                  
                                    <div class="">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="ndmc" role="tabpanel">
                                                <div class="tabsBg clrylw2">
                                                    <div class="">
                                                        {{--<div class="npdlr0">--}}
                                                            {{--<div class="wardBox clrylw">--}}
                                                                {{--<form action="knwo-area.html">--}}
                                                                    {{--<ul class="nav navbar-nav navbar-right sign-in-btn" id="sign-register">--}}
                                                                        {{--@if(Auth::guard('web')->id())--}}
                                                                            {{--<li class="sign-collapse"><a href="{{url('/dashboard')}}" ><text><span>My Account </span></a></text></li>--}}
                                                                        {{--@else--}}
                                                                            {{--<li class="reg-collapse"><a data-toggle="modal" data-target="#loginModal"><text><span>New User? </span>Register</a></text></li>--}}
                                                                            {{--<li class="sign-collapse"><a href="{{url('/login')}}" ><text><span>Already Member? </span>Sign In</a></text></li>--}}
                                                                        {{--@endif--}}
                                                                    {{--</ul>--}}
                                                                {{--</form>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        <div class="">
                                                            <!--<div class="container-placeholder"><a class="view-map-btn" href="http://13.232.20.146/wethechangesmap/" target="_blank">View Map</a></div>-->
                                                            <!--<div class="embed-container"><small><a href="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=bc2dc0627eff44018a449c154b880574&extent=77.2267,28.5173,77.2768,28.5394&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="CR-Park" src="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=bc2dc0627eff44018a449c154b880574&extent=77.2267,28.5173,77.2768,28.5394&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light"></iframe></div>-->
                                                            <div id="map-container" style="height:620px;"></div>
                                                            <div id="container-zoom">
                                                                <div id="window-zoom" style="display:none;">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                        </section><!-- end sec4-->
                    </div>
                </div><!-- end row-->
	</section><!-- end sec2-->
                <section class="sec2-5">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="row mgt20px">
                                        <div class="col-sm-12">
                                            <div id="carousel-example-generic" class="carousel slide bdr1pxoverflow" data-ride="carousel" data-interval="3000">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item">
                                                        <img src="{{ url('images/banner1.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{ url('images/banner2.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                        </div>
                                                    </div>
                                                    <div class="item active">
                                                        <img src="{{ url('images/banner3.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{ url('images/banner2.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="wd-grid">
                                        <div class="item h">
                                            <h2>आपके विचार ?</h2>
                                        </div>
                                        <div class="item l">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('query')}}">
                                                <div>
                                            @else
                                                <a href="{{url('/login')}}">
                                                <div>
                                            @endif
                                                <img src="{{ url('images/grid-icon4.png')}}" class="img-responsive hght50">
                                                <p>आपके सवाल</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item c">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('complaints')}}">
                                                <div>
                                            @else
                                                <a href="{{url('/login')}}">
                                                <div>
                                            @endif
                                                <img src="{{url('images/grid-icon1.png')}}" class="img-responsive">
                                                <p>शिकायत</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item r">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('suggestions')}}">
                                                <div>
                                            @else
                                                <a href="{{url('/login')}}">
                                                <div>
                                            @endif
                                                <img src="{{url('images/grid-icon2.png')}}" class="img-responsive">
                                                <p>सुझाव</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item g">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('feedback')}}">
                                                <div>
                                            @else
                                                <a href="{{url('/login')}}">
                                                <div>
                                            @endif
                                                <img src="{{url('images/grid-icon5.png')}}" class="img-responsive">
                                                <p>प्रतिपुष्टि</p>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="item f">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('updateus')}}">
                                                <div>
                                            @else
                                                <a href="{{url('/login')}}">
                                                <div>
                                            @endif
                                                    <img src="{{url('images/grid-icon4.png')}}" class="img-responsive">
                                                    <p>नवीनतम अद्यतन</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item i">
                                            @if(Auth::guard('web')->id())
                                                <a href="{{url('/discussion')}}">
                                                <div>
                                                
                                            @else
                                                        <a href="{{url('/login')}}">
                                                            <div>
                                                                @endif
                                                <img src="{{url('images/grid-icon6.png')}}" class="img-responsive">
                                                <p>विचार-विमर्श</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sec3 comp-sgst">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="bggray bdr1px3">
                                        <h2 class="clrRed dd-slient-h2 h2clrylw3">मुख्य विशेषताएं</h2>
                                        <div id="features-maruee">
                                            <ul class="bggul" style="width: 4774px;">
                                                <li>इंटरेक्टिव मानचित्र को समझने में आसानी</li>
                                                <li>क्षेत्र  स्तर पर विस्तृत जानकारी </li>
                                                <li>वार्ड स्तर पर विस्तृत जानकारी </li>
                                                <li>स्वामित्व की भावना में भागीदारी </li>
                                                <li>बेहतर प्रशासन और योजना बनाना </li>
                                                <li>वार्ड की जानकारी का अद्यतन </li>
                                                <li>शिकायत निवारण में सहायता </li>
                                               </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
           
    
<section class="sec7 dispN768px">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{url('images/testibg.png')}}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="loginModalform" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Sign In</h3>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('/login')}}">
                        {{csrf_field()}}
                        <div class="login-form">
                            <div class="form-group">
                                <label>Username/Email</label>
                                <input type="text" name="email" class="form-control" placeholder="lorem@ipsum.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-default btn-modal-login">
                            </div>
                            <h5>Not a member <a href="register.html" class="dz-sign-up">Sign up Now</a></h5>
                            <h5><a href="#" class="forget-password">Forget Password</a></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div><!-- container-->
    </div><!-- container-fluid-->
    </div><!-- close wrapper-->
<style>

.carousel-inner {  height: 454px; }
@media screen and (min-width:786px)
{
.carousel-inner .item { height: 454px; }
.carousel-inner img {   height: 454px !important; }
}
@media screen and (-webkit-min-device-pixel-ratio:0)
  and (min-resolution:.001dpcm) 
{
    .mnheight500px {
    min-height: 572px !important;
    }
}
</style>
<script>
    function changeSubHead(value){
        $.ajax({
            type : 'POST',
            url : '{{url('subhead')}}',
            data : {id : value, _token: '{{csrf_token()}}' },
            success : function(res){
                $('#subhead').html(res);
            }
        });
    }

    function changeAction(value){
        document.getElementById('change-action').action = value;
    }
</script>

        <!--put your map api javascript url with key here-->
        <script src="http://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
        
                
        <script type="text/javascript">
            var map_obj=0,kmlLayer=0;
		
            init("<?php echo url('/kml-file/MCD_zones.kml')?>");
		
            function init(kml)
            {
                if(!map_obj) map_obj=new MapmyIndia.Map('map-container',{center:[28.61,77.23],zoomControl: true,hybrid:false,search:false });
                if(kmlLayer) map_obj.removeLayer(kmlLayer);
                kmlLayer=new MapmyIndia.kml(map_obj,kml, {fitBounds:true,async: true});
            }
            function loadFile()
            {
                document.getElementById("text_file").value='Wait..';
                var fileToLoad = document.getElementById("fileToLoad").files[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoadedEvent) 
                {
                    var textFromFileLoaded = fileLoadedEvent.target.result;
                    document.getElementById("text_file").value = textFromFileLoaded;
                    init(textFromFileLoaded);
                };
                fileReader.readAsText(fileToLoad, "UTF-8");
            }
            
        </script>
        @stop