<div class="thread-block">
    <h3 class="thread-title">
        <a href="{{ URL::to('/patients/'.$patient->id).'/threads/'.$thread->id }}">{{$thread->title}}</a><br>
        <small>Last updated: {{ date("H:i jS M Y", strtotime($thread->updated_at)) }}</small>
    </h3>
</div>