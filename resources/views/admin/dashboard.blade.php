@extends('admin.layouts.app')

@section('content')
    <style>
        .small-box h3
        {
            z-index: 5;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .small-box>.small-box-footer
        {
            position: absolute;
            width: 100%;
            bottom: 0;
            text-align: right;
            padding: 3px 20px 3px 0;
            font-weight: bold;
            color: #fff;
            color: rgba(255,255,255,0.8);
            display: block;
            z-index: 10;
            background: rgba(0,0,0,0.5);
            text-decoration: none;
        }
        .graphBx
        {
            border: 1px solid rgba(0,0,0,.5);
            margin-bottom: 20px;
        }
        .graphBx .bxhead
        {
            width: 100%;
            padding: 10px;
            background: #242a30;
        }
        .graphBx .bxhead h3
        {
            margin: 0;
            padding: 0;
            font-size: 18px;
            color: #fff;
            width: calc(100% - 140px);
        }
        .small-box .icon,
        .small-box:hover .icon
        {
            font-size: 70px;
        }
        .graph
        {
            height: 300px;
            overflow: hidden;
            background: #fff;
        }
        .graphBx-cntrl
        {
            margin: 0;
            padding: 0;
            display: flex;
            float: right;
            position: absolute;
            right: 20px;
            top: 8px;
        }
        .graphBx-cntrl li
        {
            list-style: none;
            margin: 0 5px;
        }
        .graphBx-cntrl li:nth-child(1) a
        {
            background: #fff;
            color: #989898;
        }
        .graphBx-cntrl li:nth-child(2) a
        {
            background: #00acac;
            color: #fff;
        }
        .graphBx-cntrl li:nth-child(3) a
        {
            background: #f59c1a;
            color: #fff;
        }
        .graphBx-cntrl li:nth-child(4) a
        {
            background: #ff5b57;
            color: #fff;
        }
        .graphBx-cntrl li a
        {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #fff;
            color: #262626;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .small-box.bg1
        {
            background: #ff5b57;
        }
        .small-box.bg2
        {
            background: #f59c1a;
        }
        .small-box.bg3
        {
            background: #929ba1;
        }
        .small-box.bg4
        {
            background: #575d63;
        }
        .small-box strong,
        .small-box h3
        {
            color: #fff;
        }
    </style>
    <p> Welcome to Dashboard</p>

   
    <div class="row">
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE REGISTERED USERS</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE GRIEVANCE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerGriev" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE SUGGESTIONS</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerSugges" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE FEEDBACK</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerFeed" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE QUERY</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerQuery" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>STAKEHOLDER WISE UPDATE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerUpdate" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>GRIEVANCES SHARE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerGrievShare" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>SUGGESTIONS SHARE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerSuggesShare" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>QUERY SHARE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerQueryShare" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="graphBx">
                <div class="bxhead">
                    <h3>UPDATE SHARE</h3>
                    <ul class="graphBx-cntrl">
                        <li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div id="chartContainerUpdateShare" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
@endsection
<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. Of Visitors"
            },
            data: [{
                type: "column",
                //showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                        $users = \App\User::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                    ]
            }]
        });


        var chartGriev = new CanvasJS.Chart("chartContainerGriev", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Grievance"
            },
            data: [{
                type: "column",
                //showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                    $users = \App\Complaint::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });

        var chartSugges = new CanvasJS.Chart("chartContainerSugges", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Suggestions"
            },
            data: [{
                type: "column",
                // showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                    $users = \App\Suggestion::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });

        var chartFeed = new CanvasJS.Chart("chartContainerFeed", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Feedback"
            },
            data: [{
                type: "column",
                //showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                    $users = \App\Feedback::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });

        var chartQuery = new CanvasJS.Chart("chartContainerQuery", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Query"
            },
            data: [{
                type: "column",
                // showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                    $users = \App\Query::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });

        var chartUpdate = new CanvasJS.Chart("chartContainerUpdate", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Update"
            },
            data: [{
                type: "column",
                // showInLegend: true,
                legendMarkerColor: "grey",
                legendText: "",
                dataPoints: [
                    <?php foreach ($heads as $dep_data){
                    $users = \App\Updateus::where('head_id',$dep_data->id)->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });
        chart.render();
        chartGriev.render();
        chartSugges.render();
        chartFeed.render();
        chartQuery.render();
        chartUpdate.render();

    }
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
                <?php foreach ($heads as $dep_data){
                $users = \App\Complaint::where('head_id',$dep_data->id)->get();?>
                ['<?php echo $dep_data->name?>',<?php echo count($users)?>],
            <?php }?>
        ]);

        var data1 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
                <?php foreach ($heads as $dep_data){
                $users = \App\Suggestion::where('head_id',$dep_data->id)->get();?>
            ['<?php echo $dep_data->name?>',<?php echo count($users)?>],
            <?php }?>
        ]);

        var data2 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
                <?php foreach ($heads as $dep_data){
                $users = \App\Query::where('head_id',$dep_data->id)->get();?>
                ['<?php echo $dep_data->name?>',<?php echo count($users)?>],
            <?php }?>
        ]);

        var data3 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
                <?php foreach ($heads as $dep_data){
                $users = \App\Updateus::where('head_id',$dep_data->id)->get();?>
                ['<?php echo $dep_data->name?>',<?php echo count($users)?>],
            <?php }?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'Grievance Share', 'width':526, 'height':300};
        var options1 = {'title':'Suggestion Share', 'width':526, 'height':300};
        var options2 = {'title':'Query Share', 'width':526, 'height':300};
        var options3 = {'title':'Update Share', 'width':526, 'height':300};

        // Display the chart inside the <div> element with id="piechart"
        var chart1 = new google.visualization.PieChart(document.getElementById('chartContainerGrievShare'));
        chart1.draw(data, options);

        var chart2 = new google.visualization.PieChart(document.getElementById('chartContainerSuggesShare'));
        chart2.draw(data1, options1);

        var chart3 = new google.visualization.PieChart(document.getElementById('chartContainerQueryShare'));
        chart3.draw(data2, options2);

        var chart4 = new google.visualization.PieChart(document.getElementById('chartContainerUpdateShare'));
        chart4.draw(data3, options3);
    }
</script>
