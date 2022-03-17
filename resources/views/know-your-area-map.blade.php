<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
       
        <meta name="desciption" content="KML Example - MapmyIndia Maps API, kml file upload to display map overlays leaflet ">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

        <!--put your map api javascript url with key here-->
        <script src="https://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
        
       <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon">

                
                <script src="{{url('js/jquery-1.12.3.min.js')}}"></script>
				<script src="https://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
               

    </head>
    <body>
      
	
        <div id="map-container" style="height:230px;"></div>
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
		  
	    <!--div to show the best result matching the search
                    <br><hr><div class="doc1" >Source Code</div>-->
                    

                    <!--div to show the other result-->
                   <!-- <div style="border-top: 1px solid #e9e9e9;padding:10px; margin-top: 12px" id="otherresult"></div>-->
            </div>
                <!--div to show the map-->
                
            </body>
</html>

