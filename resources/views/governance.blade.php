@extends('layouts.app')

@section('content')
    <section class="dt-breadcrumbs">
        <div class="container-fluid"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            <li><a href="#">शासन</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="container-fluid">
            <div class="container">

                <section class="ward-leader">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h2 class="cmn-h2">शासन</h2>
                                </div>
                            </div>
                            <div class="row">
                                @if (count($results) > 0)
                                    @foreach($results as $result)
                                        <div class="col-xs-12 col-sm-6 col-md-12 govern">
                                            <div class="">
                                                <div class="wrd-ldr-imgbox col-xs-12 col-sm-6  col-md-3">
                                                    @if($result->image)
                                                        <img src="{{url('public/uploads/governance/'.$result->image)}}" class="img-responsive">
                                                    @else
                                                        <img src="{{url('public/uploads/user.jpg')}}" class="img-responsive">
                                                    @endif
                                                        <span><h4>{{$result->name}}</h4> {{$result->designation}}</span>
                                                </div>
                                                <div class="wrd-ldr-imgbox col-xs-12 col-sm-6  col-md-3">
                                                    @if($result->image1)
                                                        <img src="{{url('public/uploads/governance/'.$result->image1)}}" class="img-responsive">
                                                    @else
                                                        <img src="{{url('public/uploads/user.jpg')}}" class="img-responsive">
                                                    @endif
                                                        <span><h4>{{$result->name1}}</h4> {{$result->designation1}}</span>
                                                </div>
                                                <div class="wrd-ldr-imgbox col-xs-12 col-sm-6  col-md-3">
                                                    @if($result->image2)
                                                        <img src="{{url('public/uploads/governance/'.$result->image2)}}" class="img-responsive">
                                                    @else
                                                        <img src="{{url('public/uploads/user.jpg')}}" class="img-responsive">
                                                    @endif
                                                        <span><h4>{{$result->name2}}</h4> {{$result->designation2}}</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3" style="text-align: justify;">
                                                        <?php echo $result->description;?>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-xs-12 col-sm-12 col-md12">
                                        <div class="wrd-ldr-card">
                                           No Governance
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@stop
