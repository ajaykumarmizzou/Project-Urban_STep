<?php $last = request()->segment(2);?>
<link rel="stylesheet" href="http://urbanstep.in/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
                    <?php if($last==166){?>
                    <div class="col-sm-4">
                       
                        
        
		<form action="" method="post">
        <div style="border-bottom: 1px solid #e9e9e9;padding:10px 12px;background:#fff;"><span style="font-size: 20px">Urban STeP : </span> <span style="font-size:16px;color:#777">LAP</span>
        <button type="button" id="clk-bt" class="btn btn-info" data-target="#menu" style="margin-left:245px;background-color: #925f6e;
    border-color: #925f6e;">Click</button>
		</div>
		
 <script>
$(document).ready(function(){
  $("#clk-bt").click(function(){
    $(".collapse").slideToggle();
  });
});
</script> 
            <div id="menu" class="collapse">
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
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">वितरण सुविधाएं : </td>
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
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">हरे रंग के साथ : </td>
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
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">चिकित्सा सुविधाएं : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7018_0_3.png" style="width:24px;height:30px;text-align:center;">
                    </td>
					</tr>
                    <tr>
                     <td style="text-align:center;">
					<input type="checkbox" value="offices.kml" name="aadi" onclick="init(this.value);">
					<!--<button value="offices.kml" name="aadi" onclick="init(document.getElementById('search').value)" style="margin-top:10px;">View on Map</button>-->
					</td>
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">कार्यालयों : </td>
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
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">सार्वजनिक सुविधाये : </td>
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
					<td style="font-size: 16px;padding: 3px 0px 0px 6px;">कल्याण केंद्र : </td>
					<td style="text-align:center;"><img src="https://www.fuel4mobi.com/dev/kml-file/Layer0_Symbol_cad7308_0_0.png" style="width:24px;height:30px;text-align:center;"></td>
					</tr>
			  </table>
                
				</div>
                <br>
				
                    </div>
                
              </form> 
                        
                    </div>
                    <div class="col-sm-8">
                       <div class="tabsBg border-clr">
                        <div id="map-container" style="height:1222px;"></div></div>
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
		<button type="button" id="clk-bt" class="btn btn-info" href="#menus" role="button" aria-expanded="false" aria-controls="collapseExample"  style="margin-left:245px;">Click For Map Details</button>
		</div>
		
        <script>
$(document).ready(function(){
  $("#clk-bt").click(function(){
    $(".collapse").slideToggle();
  });
});
</script> 
  
            <div id="menus" class="collapse">
                  
           
              <div style="padding: 0 12px 0 17px;line-height:20px">
			  <div style="padding: 5px 0;font-size:16px;color:#222">नक्शा : Naraina
			 
              <table id="urbanstp-lap1">
			  <tr>
			             <td style="font-size: 16px;padding: 10px 0px 0px 0px;">क्षेत्र की सीमा : </td><td>
				      <input type="checkbox" value="Area_Boundary.kml" name="aadi" onclick="init(this.value);">
				      <!--<button  type="button"  value="Area_Boundary.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					  <td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/busroutes.png" style="width:20px;height:5px;"></td>
					  </td>
				       </tr><tr>
			             <td style="font-size: 16px;padding: 10px 0px 0px 0px;">एटीएम : </td><td>
						 <input type="checkbox" value="ATM_BANKS.kml" name="aadi" onclick="init(this.value);">
						 <!--<button  type="button"  value="ATM_BANKS.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
						 </td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f0e8_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">भवन निर्माण : </td><td>
					<input type="checkbox" value="building_plots.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="building_plots.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/built-up-new.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">बस स्टॉप : </td><td>
					<input type="checkbox" value="Bus_Stops.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Bus_Stops.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31718_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">बस के मार्ग : </td><td>
					<input type="checkbox" value="Bus_Routes.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Bus_Routes.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/bus_rout_parking.png" style="width:24px;height:5px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">संघर्ष अंक : </td><td>
					<input type="checkbox" value="Conjested_Points.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Conjested_Points.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31138_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">कंपनियों के सलाहकार कार्यालय : </td><td>
					<input type="checkbox" value="Companies_Consultants_Offices.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Companies_Consultants_Offices.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30110_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">सौदागर : </td><td>
					<input type="checkbox" value="Dealers.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Dealers.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b31138_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">वितरण सुविधाएं : </td><td>
					<input type="checkbox" value="Distributive_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Distributive_facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2ef70_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">निर्यातक : </td><td>
					<input type="checkbox" value="Exporter.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Exporter.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30cd0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">सड़कों के किनारे हरा : </td><td>
					<input type="checkbox" value="Green_along_roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Green_along_roads.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/greenalongroads-new.png" style="width:20px;height:5px;"></td>
					</tr>
					<tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">होटल : </td><td>
					<input type="checkbox" value="Hotels.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Hotels.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_197f50a0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">इंडस्ट्रीज : </td><td>
					<input type="checkbox" value="Industry.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Industry.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b306f0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">भूमि उपयोग : </td><td>
					<input type="checkbox" value="Landuse.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Landuse.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/landuse-new.png" style="width:40px;height:6px;"></td>
					
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">चिकित्सा सुविधाएं : </td><td>
					<input type="checkbox" value="Medical_Facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Medical_Facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_197f6240_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">पार्किंग : </td><td>
					<input type="checkbox" value="Parking.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Parking.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2fb30_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">पार्क : </td><td>
					<input type="checkbox" value="Parks.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Parks.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/boundary.png" style="width:20px;height:20px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">पब्लिक और सेमी पब्लिक : </td><td>
					<input type="checkbox" value="PSP.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="PSP.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b34618_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">सार्वजनिक शौंचालय : </td><td>
					<input type="checkbox" value="Public_Toilets.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Public_Toilets.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b312b0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">धार्मिक सुविधाएँ : </td><td>
					<input type="checkbox" value="Religious_facilities.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Religious_facilities.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b315a0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">खाने की दुकान : </td><td>
					<input type="checkbox" value="restaurant.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="restaurant.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f260_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">स्कूल : </td><td>
					<input type="checkbox" value="schools.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="schools.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30e48_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">सेवाएं : </td><td>
					<input type="checkbox" value="Services.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Services.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2f3d8_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">खुदरा व्यापारी और सेवाएँ : </td><td>
					<input type="checkbox" value="shops.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="shops.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b30e48_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">प्रदायक : </td><td>
					<input type="checkbox" value="roads.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="roads.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_12b2fb30_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">पानी की टंकी : </td><td>
					<input type="checkbox" value="Water_Tanks.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="Water_Tanks.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_102ef428_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">कल्याण केंद्र : </td><td>
					<input type="checkbox" value="wellness.kml" name="aadi" onclick="init(this.value);">
					<!--<button  type="button"  value="wellness.kml" name="aadi" onclick="init(this.value)"  style="margin-top:10px;">View on Map</button>-->
					</td>
					<td><img src="https://www.fuel4mobi.com/dev/kml-file-naraina/Layer0_Symbol_cad7308_0_0.png" style="width:40px;height:40px;"></td>
					</tr><tr>
					<td style="font-size: 16px;padding: 10px 0px 0px 0px;">थोक व्यापारी : </td><td>
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
                    <div class="col-sm-8">
                       <div class="tabsBg border-clr">
                        <div id="map-container" style="height:1504px;"></div></div>
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
