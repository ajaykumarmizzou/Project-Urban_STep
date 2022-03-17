<?php $last = request()->segment(2);?>
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
                            <li><a href="{{url('know-your-area-view/'.$zonesDet->id)}}"><?php echo $zonesDet->city?></a>
                            <li><a href="#"><?php echo $ward->area;?></a>
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
                        <h2 class="cmn-h2">Know Your Ward</h2>
                    </div>
                </div>
                <div class="row">
                    <!--<div class="col-sm-6">-->
                    <!--    {{--<h3>{{strtoupper($ward->area)}} – Ward {{$ward->ward_number}}, Zone No. {{$zonesDet->zone_number}}</h3>--}}-->
                    <!--    {{--<ul class="areaViewList">--}}-->
                    <!--        {{--<li>Located in South Delhi , lies in Planning Zone F and MCD Zone {{$zonesDet->zone_number}} (Central).</li>--}}-->
                    <!--        {{--<li>The area comes under the jurisdiction of South Delhi--}}-->
                    <!--            {{--Municipal Corporation.</li>--}}-->
                    <!--        {{--<li>Location:--}}-->
                    <!--            {{--<ul>--}}-->
                    <!--                {{--<li>Outer Ring Road in the north,</li>--}}-->
                    <!--                {{--<li>Jahapanah Forest Area in the South,</li>--}}-->
                    <!--                {{--<li>Kalkaji and Govindpuri Extension in the East</li>--}}-->
                    <!--                {{--<li>Greater Kailash II in the West.</li>--}}-->
                    <!--            {{--</ul>--}}-->
                    <!--        {{--</li>--}}-->
                    <!--        {{--<li>Maximum land area in the ward is residential (along with mixed use).</li>--}}-->
                    <!--    {{--</ul>--}}-->
                    <!--    <?php echo $ward->content;?>-->
                    <!--</div>-->

                    <?php if($last==166){?>
                    <div class="col-sm-4">
                       
                        
        
		<form action="" method="post">
        <div style="border-bottom: 1px solid #e9e9e9;padding:10px 12px;background:#fff;"><span style="font-size: 20px">Urban STeP : </span> <span style="font-size:16px;color:#777">LAP</span>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#menu" style="margin-left:245px;">Click</button>
		</div>
		
  
            <div id="menu" class="collapse">
              <div style="padding: 0 12px 0 17px;line-height:20px">
			  <div style="padding: 5px 0;font-size:13px;color:#222">Map : C.R Park</div>
			 
              <table>
			  
			  <tr>
			        <td style="font-size: 16px;padding: 10px 0px 0px 0px;">ATM : </td>
					<td><input type="checkbox" value="ATM_bank.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="ATM_bank.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad5430_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Alaknanda BuiltUp : </td><td>
					<input type="checkbox" value="Alaknanda_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Alaknanda_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/alaknanda-builtup-new.png" style="width:20px;height:20px;"></td>
					</tr>
					<!--<tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Block Name : </td><td>
					<button value="Block_Name.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cacbae0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>-->
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Boundary : </td><td>
					<input type="checkbox" value="Boundary.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Boundary.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/boundary.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Bus Routes : </td><td>
					<input type="checkbox" value="Bus_routes.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Bus_routes.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/busroutes.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Bus stop : </td><td>
					<input type="checkbox" value="Bus_stop.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Bus_stop.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad6ea0_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Conflict Points : </td><td>
					<input type="checkbox" value="conflict_points.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="conflict_points.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Conflictpoint Buffer : </td><td>
					<input type="checkbox" value="conflictpoint_buffer.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="conflictpoint_buffer.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/conflict_points_buffer.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Consultants : </td><td>
					<input type="checkbox" value="consultants.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="consultants.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">CRPark Builtup : </td><td>
					<input type="checkbox" value="CRPark_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="CRPark_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/CR-park-built-up-new.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">DDAflats Builtup : </td><td>
					<input type="checkbox" value="DDAflats_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="DDAflats_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/DDA-built-up-new.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Distributive Facilities : </td><td>
					<input type="checkbox" value="Distributive_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Distributive_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_1.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Education : </td><td>
					<input type="checkbox" value="education.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="education.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/educations.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Green Alongroads : </td><td>
					<input type="checkbox" value="green_alongroads.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="green_alongroads.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/greenalongroads-new.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Hotels : </td><td>
					<input type="checkbox" value="Hotels.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Hotels.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_2.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Landuse : </td>
					<td>
					<input type="checkbox" value="landuse.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="landuse.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/landuse-new.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Medical Facilities : </td><td>
					<input type="checkbox" value="medical_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="medical_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_3.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Offices : </td><td>
					<input type="checkbox" value="offices.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="offices.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_4.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Offstreet Parking : </td><td>
					<input type="checkbox" value="offstreet_parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="offstreet_parking.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/offstreetparking.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Onstreet Parking : </td><td>
					<input type="checkbox" value="onstreet_parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="onstreet_parking.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/onstreet_parking.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Public Toilet : </td><td>
					<input type="checkbox" value="Public_toilet.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Public_toilet.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_5.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Public Utilities : </td><td>
					<input type="checkbox" value="public_utilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="public_utilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/public-Utilites.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Religious Facilities : </td><td>
					<input type="checkbox" value="Religious_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Religious_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_12b315a0_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Restaurants Cafes : </td><td>
					<input type="checkbox" value="Restaurants_cafes.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Restaurants_cafes.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_7.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Roads : </td><td>
					<input type="checkbox" value="roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="roads.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/roads.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Water Tanks : </td><td>
					<input type="checkbox" value="water_tanks.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="water_tanks.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_55f7cc8_0.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Wellness : </td><td>
					<input type="checkbox" value="wellness.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="wellness.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7308_0_0.png" style="width:24px;height:30px;"></td>
					</tr>
			  </table>
                
				</div>
                <br>
				
                    </div>
                
              </form> 
                        
                    </div>
                    <div class="col-sm-8">
                       
                        <div id="map-container" style="height:1000px;"></div>
                     </div>
                      <script src="http://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
    <script type="text/javascript">
            var map_obj=0,kmlLayer=0;
			init('Boundary.kml');
            function init(valu)
            {
                var url = '<?php echo url('kml-file')?>';
                var kml = url+'/'+valu;
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
                      <?php }else if($last==160){?>
                    <div class="col-sm-4">
                       
                        
        
		<form action="" method="post">
        <div style="border-bottom: 1px solid #e9e9e9;padding:10px 12px;background:#fff;"><span style="font-size: 20px">Urban STeP : </span> <span style="font-size:16px;color:#777">LAP</span>
		<button type="button" class="btn btn-info" data-toggle="collapse" href="#menus" role="button" aria-expanded="false" aria-controls="collapseExample"  style="margin-left:245px;">Click</button>
		</div>
		
  
            <div id="menus" class="collapse">
                  
           
              <div style="padding: 0 12px 0 17px;line-height:20px">
			  <div style="padding: 5px 0;font-size:13px;color:#222">Map : Naraina
			 
              <table>
			  <tr>
			             <td style="font-size: 16px;padding: 10px 0px 0px 0px;">Area Boundary : </td><td>
				      <input type="checkbox" value="Area_Boundary.kml" name="aadi" onclick="init(this.value);">
				      <!--<button  type="button"  value="Area_Boundary.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					  <td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/boundary.png" style="width:24px;height:30px;"></td>
					  </td>
				       </tr><tr>
			             <td style="font-size: 16px;padding: 10px 0px 0px 0px;">ATM : </td><td>
						 <input type="checkbox" value="ATM_BANKS.kml" name="aadi" onclick="init(this.value);">
						 <!--<button  type="button"  value="ATM_BANKS.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
						 </td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f0e8_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Building Plots : </td><td>
					<input type="checkbox" value="building_plots.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="building_plots.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/builtup.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Bus stop : </td><td>
					<input type="checkbox" value="Bus_Stops.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Bus_Stops.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31718_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Bus Routes : </td><td>
					<input type="checkbox" value="Bus_Routes.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Bus_Routes.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/busroutes.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Conjested Points  : </td><td>
					<input type="checkbox" value="Conjested_Points.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Conjested_Points.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31138_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Companies Consultants Offices : </td><td>
					<input type="checkbox" value="Companies_Consultants_Offices.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Companies_Consultants_Offices.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30110_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Dealers : </td><td>
					<input type="checkbox" value="Dealers.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Dealers.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31138_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Distributive Facilities : </td><td>
					<input type="checkbox" value="Distributive_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Distributive_facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2ef70_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Exporter : </td><td>
					<input type="checkbox" value="Exporter.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Exporter.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30cd0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Green Along Roads : </td><td>
					<input type="checkbox" value="Green_along_roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Green_along_roads.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/green_along_roads.png" style="width:24px;height:30px;"></td>
					</tr>
					<tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Hotels : </td><td>
					<input type="checkbox" value="Hotels.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Hotels.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_197f50a0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Industry : </td><td>
					<input type="checkbox" value="Industry.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Industry.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b306f0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Landuse : </td><td>
					<input type="checkbox" value="Landuse.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Landuse.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Manufacturer : </td><td>
					<input type="checkbox" value="Manufacturer.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Manufacturer.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30110_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Medical Facilities : </td><td>
					<input type="checkbox" value="Medical_Facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Medical_Facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_197f6240_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Parking : </td><td>
					<input type="checkbox" value="Parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Parking.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2fb30_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Parks : </td><td>
					<input type="checkbox" value="Parks.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Parks.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/offstreetparking.png" style="width:24px;height:30px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">PSP : </td><td>
					<input type="checkbox" value="PSP.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="PSP.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b34618_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Public Toilets : </td><td>
					<input type="checkbox" value="Public_Toilets.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Public_Toilets.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b312b0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Religious Facilities : </td><td>
					<input type="checkbox" value="Religious_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Religious_facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b315a0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Restaurant : </td><td>
					<input type="checkbox" value="restaurant.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="restaurant.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f260_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Schools : </td><td>
					<input type="checkbox" value="schools.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="schools.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30e48_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Services : </td><td>
					<input type="checkbox" value="Services.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Services.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f3d8_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Shops : </td><td>
					<input type="checkbox" value="shops.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="shops.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30e48_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Supplier : </td><td>
					<input type="checkbox" value="roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="roads.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2fb30_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Water Tanks : </td><td>
					<input type="checkbox" value="Water_Tanks.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Water_Tanks.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_102ef428_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Wellness : </td><td>
					<input type="checkbox" value="wellness.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="wellness.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_102ef428_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Wholesaler : </td><td>
					<input type="checkbox" value="Wholesaler.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Wholesaler.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_102ef428_0_0.png" style="width:40px;height:40px;"></td>
					</tr>
			  </table>
                
				</div>
                <br>
				
                    </div>
                </div>
              </form> 
              
                        
                    </div>
                    <div class="col-sm-8">
                       
                        <div id="map-container" style="height:1000px;"></div>
                     </div>
                     
                      <script src="https://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
                      
    <script type="text/javascript">
    
            var map_obj=0,kmlLayer=0;
			init('Area_Boundary.kml');
            function init(valu)
            {
                var url = '<?php echo url('kml-file-naraina')?>';
                var kml = url+'/'+valu;
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
                    <?php }else{?>
                     <div class="col-sm-12">
                        <img src="{{url('images/sample_map4.jpg')}}" class="img-responsive">
                        <?php }?>
                        </div>
                </div>
            </div>
        </div>
    </section>
   
@stop