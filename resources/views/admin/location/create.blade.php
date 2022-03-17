@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Zone</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.location.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Zone</label>
                    <div class="col-md-7">
                        <input id="city" name="city" class="form-control" type="text" placeholder="Zone" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Zone Number</label>
                    <div class="col-md-7">
                        <input id="zone_number" name="zone_number" class="form-control" type="text" placeholder="Zone Number" required>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-xs-12 form-group">-->
            <!--        <label class="col-md-2 control-label">Location</label>-->
            <!--        <div class="col-md-7">-->
            <!--            <input type="hidden" name="latitude" id="latitude" value="" />-->
            <!--            <input type="hidden" name="longitude" id="longitude" value="" />-->
            <!--            <input type="hidden" name="location" id="location" value="" />-->
            <!--            <input id="searchInput" name="address" class="form-control" type="text" placeholder="Search Location">-->
            <!--            <div id="map" style="display: none;"></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- <div class="row">-->
            <!--    <div class="col-xs-12 form-group">-->
            <!--        <label class="col-md-2 control-label">Image</label>-->
            <!--        <div class="col-md-7">-->
            <!--            <input id="image" name="image" class="form-control" type="file" placeholder="City" >-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- <div class="row">-->
            <!--    <div class="col-xs-12 form-group">-->
            <!--        <label class="col-md-2 control-label">Map Url</label>-->
            <!--        <div class="col-md-7">-->
            <!--            <input id="map_url" name="map_url" class="form-control" type="url" placeholder="Map Url" >-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Zone Color</label>
                    <div class="col-md-7">
                        <input id="color" name="color" class="form-control" value="" type="text" placeholder="Zone Color" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Zone Content</label>
                    <div class="col-md-7">
                        <textarea type="text" name="content" id="editor" value="" class="form-control" placeholder="Enter Content"></textarea>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor');
        $(".textarea").wysihtml5();
    });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDniSXL3UgjbI9Ok5fJzxFYfajM8O62o0o&libraries=places" async defer></script>


<script>
    $(document).ready(function(){
        initMap(28.7041, 77.1025, 15);

    });
</script>


<script>



    function initMap(lats, lngs, zm) {

        var  lati = parseFloat(lats);
        var  longi = parseFloat(lngs);
        var myLatLng = {lat: lati, lng: longi};
        var map = new google.maps.Map(document.getElementById('map'), {

            center: {lat: lati, lng: longi},
            zoom: zm
        });

        var input = document.getElementById('searchInput');

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(true);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setIcon(({
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(35, 35)
            }));
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            infowindow.open(map, marker);

            //Location details


            var place = autocomplete.getPlace();

            cityname = place.name;
            latitude = place.geometry.location.lat();
            longitude = place.geometry.location.lng();

            document.getElementById("location").value = cityname;
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;
        });
    }



</script>
