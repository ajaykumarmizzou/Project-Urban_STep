<?php if($getWards){
    foreach($getWards as $getWard){
$getWadDet = \App\Area::where('id',$getWard->area_id)->first();
$getZonDet = \App\Location::where('id',$getWard->location_id)->first();
    ?>


    <tr>
        <td>{{$getZonDet->zone_number}}</td>
        <td>{{$getZonDet->city}}</td>
        <td>{{$getWadDet->ward_number}}</td>
        <td>{{$getWadDet->area}}</td>
        <td>{{$getWard->name}}</td>
        <td>{{$getWard->colony_category}}</td>
    </tr>

 <?php } }else{?>

    <tr>
        <td colspan="6">No Data</td>
    </tr>
                          
<?php }?>

<script>
      $(document).ready( function () {
        $('#exampl').DataTable();
       
    } );
</script>