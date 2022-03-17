<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://urbanstep.in/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                  
                      <div class="col-sm-4">
                       
                        <h2>Urban STeP : LAP</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #925f6e;
    border-color: #925f6e;margin-bottom: 10px;">
    <i class="fa fa-bars"></i>
  </button>
        
		
                        
                    </div>
                    <div class="col-sm-8">
                       <div class="tabsBg border-clr">
                        <div id="map-container" style="height:430px;"></div></div>
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
                    
                </div>
            </div>
        </div>
    </section>


<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <div style="padding:10px 12px;background:#fff;"><span style="font-size: 20px">Urban STeP : </span> <span style="font-size:16px;color:#777">LAP</span>
		
		</div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="" method="post">
        
		
  
            <div id="menus" class="collapse2">
                  
           
              <div style="padding: 0 12px 0 17px;line-height:20px">
			  <div style="padding: 5px 0;font-size:16px;color:#222">Map : Naraina
			 
              <table id="urbanstp-lap1">
			  <tr>
			             <td style="font-size: 16px;padding: 10px 0px 0px 0px;">Area Boundary : </td><td>
				      <input type="checkbox" value="Area_Boundary.kml" name="aadi" onclick="init(this.value);">
				      <!--<button  type="button"  value="Area_Boundary.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					  <td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/busroutes.png" style="width:20px;height:5px;"></td>
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
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/built-up-new.png" style="width:20px;height:20px;"></td>
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
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/bus_rout_parking.png" style="width:24px;height:5px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Conflict Points  : </td><td>
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
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/greenalongroads-new.png" style="width:20px;height:5px;"></td>
					</tr>
					<tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Hotels : </td><td>
					<input type="checkbox" value="Hotels.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Hotels.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_197f50a0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Industries: </td><td>
					<input type="checkbox" value="Industry.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Industry.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b306f0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Landuse : </td><td>
					<input type="checkbox" value="Landuse.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Landuse.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/landuse-new.png" style="width:40px;height:6px;"></td>
					
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
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/boundary.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Public and Semi Public : </td><td>
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
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Retail Traders & Services: </td><td>
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
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Wellness Centres : </td><td>
					<input type="checkbox" value="wellness.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="wellness.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_cad7308_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">Wholesaler Traders  : </td><td>
					<input type="checkbox" value="Wholesaler.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Wholesaler.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f0e8_0_0.png" style="width:40px;height:40px;"></td>
					</tr>
			  </table>
                
				</div>
                <br>
				
                    </div>
                </div>
              </form> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
