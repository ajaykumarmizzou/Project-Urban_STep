@extends('layouts.app')

@section('content')
    <section class="dt-breadcrumbs">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            <li><a href="#">Ongoing Projects</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="container-fluid">
            <div class="container">

                <section class="about-us">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h2 class="cmn-h2">चालू प्रकल्प</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="project-filter">
                                        <form class="form-inline" action="#" method="post">
                                            <div class="form-group">
                                                <label for="email">Select Ward : </label>
                                                <select class="form-control" id="ward_id" name="ward_id">
                                                    <option value="">Select Ward</option>
                                                    @if(count($areas) > 0)
                                                        @foreach($areas as $area)
                                                            <option value="{{$area->id}}">{{$area->area}}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="">No Ward</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-default btn-filter" onclick="searchProject()">चल रही परियोजना देखें</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ongoning-header">
                                        <p>Total {{count($results)}} Ongoing Projects in <span>All Wards</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="project-grid" id="project_html">
                                        @if(count($results) > 0)
                                            @foreach($results as $result)
                                                <div class="project-box">
                                                    <h3>{{$result->name}}</h3>
                                                    <p>{{$result->description}}</p>
                                                    {{--<a href="{{url('project/detail/'.$result->id)}}" class="btn brn-default vwproject">परियोजना विवरण देखें</a>--}}
                                                    <a href="#" class="btn brn-default vwproject">परियोजना विवरण देखें</a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="project-box">
                                                <h3>कोई प्रोजेक्ट नहीं है</h3>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

@stop
<script>
    function searchProject(){
        $('#loading').show();
        $.ajax({
            type : 'POST',
            url : '{{url('search-project')}}',
            data : {id:$('#ward_id').val(),'_token': "{{csrf_token()}}"},
            success : function(msg){
                $('#loading').hide();
                $('#project_html').html(msg);
            }
        })
    }
</script>