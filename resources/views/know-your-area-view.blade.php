
@extends('layouts.app')
@section('content')

<section class="dt-breadcrumbs">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a>
                        <li><a href="{{url('know-your-area')}}">Know Your Area</a>
                        <li><a href="#"><?php echo $zonesDet->city;?></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us abt-ward">
    <div class="container-fluid">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h2 class="cmn-h2">अपने क्षेत्र को जानें</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 czon">
                    <?php echo $zonesDet->content;?>
                </div>

                <div class="col-sm-3">
                    <h3>आपका वार्ड विवरण</h3>
                    <table class="wardzone table table-bordered table-responsive yzone" id="myTable">
                        <thead>
                        <tr>
                            <th>वार्ड नं</th>
                            <th>वार्ड का नाम<br /> Name</th>
                            <th>नक्शा कथा</th>
                            <th>कालोनी</th>
                        </tr>
                        </thead>
                        @if(count($wards) > 0)
                            @foreach($wards as $key => $zone)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$zone->area}}</td>
                                    <td><div class="clr" @if($zone->color) style="background: {{$zone->color}}" @else style="background: #fff"  @endif></div></td>
                                    <td><a  class="btn btnDvw" @if($zone->id==160 || $zone->id==166) href="{{url('know-your-ward/'.$zone->id)}}"  @else href="#" disabled @endif>View</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <div class="col-sm-5">
                 <div class="tabsBg border-clr">
                    <!--<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>-->
                    <!--<div class="embed-container"><small><a href="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=01f1bc893512469bbf52c481f92ec3ab&extent=76.7892,28.4962,77.5074,28.8258&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br>-->
                    <!--<iframe width="647px" height="691px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="delhi-ward-layers" src="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=01f1bc893512469bbf52c481f92ec3ab&extent=76.7892,28.4962,77.5074,28.8258&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light"></iframe></div>-->
                    <div id="map-container" style="height:689px;"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.yzone th, yzone td {
    padding: 9px 4px !important;
	}
	.border-clr {
      margin-top: 25px; }
	.czon {
    margin-top: 19px;
}
</style>
<script src="http://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
        
                
        <script type="text/javascript">
            var map_obj=0,kmlLayer=0;
		
            init("<?php echo url('/kml-file/wards.kml')?>");
		
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