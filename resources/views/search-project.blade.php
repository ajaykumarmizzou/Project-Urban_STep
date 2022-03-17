@if(count($results) > 0)
    @foreach($results as $result)
        <div class="project-box">
            <h3>{{$result->name}}</h3>
            <p>{{$result->description}}</p>
            {{--<a href="{{url('project/detail/'.$result->id)}}" class="btn brn-default vwproject">View Project Details</a>--}}
            <a href="#" class="btn brn-default vwproject">View Project Details</a>
        </div>
    @endforeach
@else
    <div class="project-box">
        <h3>No Projects</h3>
    </div>
@endif