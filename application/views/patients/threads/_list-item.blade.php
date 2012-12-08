<div class="thread-block">

    <h3 class="thread-title">
        @if ($thread->urgency === "urgent")
            <span class="label label-important">Urgent</span>
        @endif
        <a href="{{ URL::to('/patients/'.$patient->id).'/threads/'.$thread->id }}">{{$thread->title}}</a>
        <small>Last updated: {{ date("H:i jS M Y", strtotime($thread->updated_at)) }}</small>
    </h3>
</div>