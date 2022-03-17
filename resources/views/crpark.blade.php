
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
<style>
    i.fa.fa-bars {
    padding: 3px 0;
    font-size: 15px;
    border: none;
    outline: none;
}
</style>

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
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    <!-- The Modal -->
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
       
		

            <div id="menu" class="collapse1">
              <div style="padding: 0 12px 0 17px;line-height:20px">
			  <div style="padding: 5px 0;font-size:16px;color:#222">नक्शा : C.R Park</div>
			 
              <table id="urbanstp-lap">
			  
			  <tr>
              		<td style="text-align:center;"><input type="checkbox" value="ATM_bank.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="ATM_bank.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
			        <td style="font-size: 16px;padding: 3px 0px 0px 6px;">एटीएम : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad5430_0.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
					<td style="text-align:center;">
					<input type="checkbox" value="Alaknanda_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Alaknanda_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td><td style="font-size: 16px;padding: 3px 0px 0px 6px;">अलकनंदा बिल्टअप : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/alaknanda-builtup-new.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
					<!--<tr>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">Block Name : </td><td>
					<button value="Block_Name.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cacbae0_0.png" style="width:40px;height:40px;"></td>
					</tr>-->
                    <tr>
                      <td style="text-align:center;">
					<input type="checkbox" value="Boundary.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Boundary.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">सीमा : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/boundary.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="Bus_routes.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Bus_routes.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">बस के मार्ग : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/busroutes.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="Bus_stop.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Bus_stop.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">बस स्टॉप : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad6ea0_0.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="conflict_points.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="conflict_points.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">संघर्ष अंक : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="conflictpoint_buffer.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="conflictpoint_buffer.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">संघर्ष बफ़र : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/conflict_points_buffer.png" style="width:20px;height:20px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="consultants.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="consultants.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">कंसल्टेंट्स : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_0.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="CRPark_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="CRPark_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">CRPark निर्मित : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/CR-park-built-up-new.png" style="width:20px;height:20px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="DDAflats_builtup.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="DDAflats_builtup.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">DDAflats निर्मित : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/DDA-built-up-new.png" style="width:20px;height:20px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="Distributive_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Distributive_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">वितरण सुविधाएं: </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_1.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="education.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="education.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">शिक्षा : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/educations.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="green_alongroads.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="green_alongroads.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">हरे रंग के साथ: </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/greenalongroads-new.png" style="width:20px;height:20px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="Hotels.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Hotels.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">होटल : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_2.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="landuse.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="landuse.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">भूमि उपयोग : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/landuse-new.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="medical_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="medical_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">चिकित्सा सुविधाएं: </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_3.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="offices.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="offices.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">कार्यालयों: </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_4.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="offstreet_parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="offstreet_parking.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">ऑफ स्ट्रीट पार्किंग : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/offstreetparking.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="onstreet_parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="onstreet_parking.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">ऑनस्ट्रीट पार्किंग : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/onstreet_parking.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="Public_toilet.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Public_toilet.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">सार्वजनिक शौचालय : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_5.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="public_utilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="public_utilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">सार्वजनिक सुविधाये: </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/public-Utilites.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="Religious_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Religious_facilities.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">धार्मिक सुविधाएँ : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_12b315a0_0.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="Restaurants_cafes.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="Restaurants_cafes.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">रेस्तरां कैफे : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_7.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="roads.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">सड़कें : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/roads.png" style="width:20px;height:20px;text-align:center;"></td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="water_tanks.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="water_tanks.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">पानी की टंकी : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_55f7cc8_0.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
                    <tr>
                    <td style="text-align:center;">
					<input type="checkbox" value="wellness.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="wellness.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">कल्याण : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7308_0_0.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
			  </table>
                
				</div>
                <br>
				
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
  
</div>
