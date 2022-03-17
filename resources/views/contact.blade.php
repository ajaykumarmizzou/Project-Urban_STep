@extends('layouts.app')

@section('content')
    <section class="dt-breadcrumbs">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="#">Home</a>
                            <li><a href="#">Contact</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2">
          @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                    {{ Session::get('message') }}
                    <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                </div>
            @endif
        <div class="container-fluid">
            <div class="container">
                <div class="content-block --contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="usp-list --narrow">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="place-title"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="icon address">
                                                <br>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="icon phone"><a href="tel:"></a></div>
                                            <div class="icon email"><a href="mailto:"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>हमसे संपर्क करें</h2>
                                <div class="content">
                                    <p></p>
                                </div>
                                <form method="POST" action="{{url('submit-contact')}}" accept-charset="UTF-8"><input name="_token" type="hidden" value="IPmBVpPeEoj5S7rW2U8o192h7YtpVlqSkFoRZYB7">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">नाम<span>*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value="" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="email" class="control-label">ईमेल<span>*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" value="" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="company" class="control-label">कंपनी</label>
                                                <input type="text" class="form-control" name="company" id="company" value="" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="phone" class="control-label">मोबाइल</label>
                                                <input type="text" class="form-control" name="phone" id="phone" value="" required >

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label for="message" class="control-label">संदेश</label><br>
                                                <textarea name="message" id="message" class="form-control" required></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-primary" value="Send"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
