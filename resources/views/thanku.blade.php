@extends('layouts.app')
@section('content')
    <style>
        ul {
            list-style-type: none;
        }
    </style>
    <?php $lastId = Request::segment(2);
    $lastD = Request::segment(3);
    if($lastId==1){
        $types = 'Grievance';
        $urls = 'complaints';
    }else if($lastId==2){
        $types = 'Suggestion';
        $urls = 'suggestions';
    }else if($lastId==3){
        $types = 'Query';
        $urls = 'query';
    }else if($lastId==4){
        $types = 'Update Us';
        $urls = 'updateus';
    }
    else if($lastId==5){
        $types = 'Feedback';
        $urls = 'feedback';
    }
    else if($lastId==6){
        $types = 'Discussion';
        $urls = 'discussion';
    }
    ?>
<section class="dt-breadcrumbs">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a>
                        <li><a href="{{url('/'.$urls)}}"> <?php echo $types;?></a>
                        <li><a href="#">Thanks</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-complaint">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 text-center">
                    <h3 class="thankh3">
                        @if (\Session::has('success'))
                            <div>
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>

                    @endif</h3>
                </div>

                <div class="col-sm-8 col-sm-offset-2">
                    <div class="thnksBox">
                        <h2>धन्यवाद </h2>
                        <h3>तुंहारे <?php echo $types;?> सफलतापूर्वक सबमिट कर दिया गया है</h3>
                    </div>
                </div>

                <?php if($lastId==1){?>
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="thnksBox">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="clrw2">शिकायत संख्या :</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="whiteBox"><?php echo $lastD;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else if($lastId==2){?>
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="thnksBox">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="clrw2">सुझाव संख्या :</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="whiteBox"><?php echo $lastD;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else if($lastId==3){?>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="thnksBox">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="clrw2">क्वेरी नंबर :</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="whiteBox"><?php echo $lastD;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
                @if (\Session::has('auth_msg'))
                    {!! \Session::get('auth_msg') !!}
                @endif
            </div>
        </div>
    </div>
</section>
@stop