<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> <script>
$(document).ready(function(){
  $("#res-menu").click(function(){
    $(".collapse-nav").slideToggle();
  });
});
</script>
<nav class="navbar navbar-default clrylw">
    <div class="container-fluid">
        <div class="container">
            <div id="res-menu">
               <img src="http://fuel4mobi.com/dev/images/bars.png" alt="bar-mobile">
            </div>
             
            <div class="collapse-nav navbar-collapse ccNav" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  
                        <li class="active"><a href="{{url('/')}}"  target="_self" class=""> होम </a></li>
                        <li><a href="{{url('about-us')}}"  target="_self" class=""> हमारे बारे में</a></li>
                        <li><a href="{{url('governance')}}"  target="_self" class=""> शासन</a></li>
                        <li><a href="{{url('ongoing-project')}}"  target="_self" class=""> ऑनगोइंग प्रोजेक्ट </a></li>
                        <li><a href="{{url('contact')}}"  target="_self" class=""> संपर्क सूत्र </a></li>
                        
                        <!--<li><a href="#"><i class="clry">Emergency Contact</i></a></li>-->
                        @if(Auth::guard('web')->id())
                            <li><a href="{{url('/dashboard')}}" >मेरा खाता</a></li>
                            <li><a href="{{url('/logout')}}" >लॉगआउट </a></li>
                        @else
                            <li><a href="{{url('/login')}}" style="font-size:23px;">लॉगिन</a></li>
                            <li><a href="#" data-toggle="modal"  data-target="#loginModals" style="font-size:23px;">रजिस्टर</a></li>
                        @endif
                        
                        </ul> <a href="#googtrans(hi|en)" target="_self"  data-lang="en" style="float: right;color: white;padding: 14px;padding-right: 0px;">In English</a>

                <!-- Collect the nav links, forms, and other content for toggling --> 
                <ul class="nav navbar-nav navbar-right sci">
                    
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
                <!--<div id="google_translate_element" style="padding-top: 12px;"></div> -->

  
  <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'hi', includedLanguages: 'en,hi',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
  
            </div>
        </div>
    </div>
</nav>
</div>
</div>
</div>
<style type="text/css">
#res-menu{
    display: none;
}
@media screen and (max-width: 768px) {
  .collapse-nav {display: none;} 
  #res-menu{display: block;}
    div#res-menu img {
    height: 30px;
    width: 40px;
    margin-top: -78px;
    float: right;
}
}
   
</style>
</nav>