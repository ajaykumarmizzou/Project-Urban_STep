<?php if($discussions){
    foreach($discussions as $discussion){
        $user = \App\User::where('id',$discussion->user_id)->first();
        $cat = \App\Head::where('id',$discussion->head_id)->first();
    ?>
<div class="row mgt20p2">
    <div class="col-sm-12">
        <div class="topic-discuss-username">
            <div class="row">
                <div class="col-sm-4">
                                    <span class="stakeUsername">
                                    <h4 class="text-center">{{$user->name}}<p class="stakeholder-category">{{$cat->name}}</p><p class="stakeholder-category">{{ date('d-m-Y H:i:s', strtotime($discussion->created_at)) }}</p></h4>
                                    </span>
                </div>
                <div class="col-sm-8">
                    <span>{{$discussion->query}}</span>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="col-sm-4">
        <img src="images/sample_map4.jpg" class="img-responsive">
    </div> -->
</div>
<?php } } ?>