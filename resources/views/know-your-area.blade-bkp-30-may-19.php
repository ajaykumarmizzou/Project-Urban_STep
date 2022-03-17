@extends('layouts.app')
@section('content')
<section class="dt-breadcrumbs">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a>
                        <li><a href="#">Know Your Area</a>
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
                    <h2 class="cmn-h2">Know Your Area</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Enter your Colony name</h3>
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Colony Name :</th>
                            <th class="text-center">
                                <input type="text" name="colony_name" id="colony_name" class="form-control" placeholder="Enter Colony Name" onkeyup="searchWard()">
                            </th>
                            <!--<th><button class="btn btn-primary" id="searchWard" onclick="searchWard()">Search</button></th>-->
                        </tr>
                        </thead>
                    </table>
                    <h3>Your Ward Details</h3>
                    <div >
                        <table class="table table-bordered text-center" id="exampl">
                            <thead>
                            <tr>
                                <th class="text-center">ZONE NUMBER</th>
                                <th class="text-center">ZONE NAME</th>
                                <th class="text-center">WARD NUMBER</th>
                                <th class="text-center">WARD NAME</th>
                                <th class="text-center">COLONY</th>
                                <th class="text-center">COLONY Category</th>
                            </tr>
                            </thead>
                            <tbody id="colony_html">
                            <tr>
                                <td colspan="6">No Data</td>
                            </tr>
                            </tbody>
                        </table>
                        {{--<div class="abt-ward-info">--}}
                            {{--<strong class="listStrong">Municipal Corporation of Delhi is trifurcated into :</strong>--}}
                            {{--<ul>--}}
                                {{--<li>North Delhi Municipal Corporation</li>--}}
                                {{--<li>South Delhi Municipal Corporation</li>--}}
                                {{--<li>East Delhi Municipal Corporation</li>--}}
                            {{--</ul>--}}
                            {{--<strong class="listStrong">NCTD comprises of {{count($zones)}} planning zones.</strong>--}}
                            {{--<strong class="listStrong">NCTD has {{count($wards)}} wards.</strong>--}}
                        {{--</div>--}}
                    </div>
                </div>

                <div class="col-sm-3">
                    <h3>Your Zone Details</h3>
                    <table class="wardzone table table-bordered table-responsive" id="myTable">
                        <thead>
                        <tr>
                            <th>Zone No.</th>
                            <th>Zone Name</th>
                            <th>Map Legend</th>
                            <th>Ward</th>
                        </tr>
                        </thead>
                        @if(count($zones) > 0)
                            @foreach($zones as $key => $zone)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$zone->city}}</td>
                                    <td><div class="clr" @if($zone->color) style="background: {{$zone->color}}" @else style="background: #fff"  @endif></div></td>
                                    <td><a  class="btn btnDvw" @if($zone->id==13 || $zone->id==21) href="{{url('know-your-area-view/'.$zone->id)}}"  @else href="#" disabled @endif>View</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <div class="col-sm-5">
    <!--                <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>-->
    <!--                <div class="embed-container"><small><a href="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=01f1bc893512469bbf52c481f92ec3ab&extent=76.7892,28.4962,77.5074,28.8258&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br>-->
    <!--                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="delhi-ward-layers" src="//it-information.maps.arcgis.com/apps/Embed/index.html?webmap=01f1bc893512469bbf52c481f92ec3ab&extent=76.7892,28.4962,77.5074,28.8258&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="-->
    <!--width: 603px;height: 570px;"></iframe></div>-->
                    <div id="map-container" style="height:620px;"></div>
             
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    html, body, #viewDiv {
      padding: 0;
      margin: 0;
      height: 100%;
      width: 100%;
    }
  </style>

  <script>
  function searchWard(){
        if($('#colony_name').val()!=''){
            $.ajax({
               type : 'POST',
               url : '{{url('search-ward')}}',
               data : {'colony' : $('#colony_name').val(),'_token': "{{csrf_token()}}"},
                success : function(msg){
                    $('#colony_html').html(msg);
                }
            });
        }
  }
    // require(["esri/WebMap",
	// 		"esri/Map",
	// 		"esri/views/MapView",
	// 		"dojo/domReady!"
	// 		],
	// 	function(Map, MapView,WebMap) {
	// 	var webmap = new WebMap({
	// 	  portalItem: { // autocasts as new PortalItem()
	// 		id: "118b7225e0c443a285e15ce46270d1f3"
	// 	  }
	// 	});
	// 	var view = new MapView({
	// 		map: webmap,  // The WebMap instance created above
	// 		container: "viewDiv"
	// 	});
	//
    //
	// });
  </script>
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