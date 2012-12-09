<section class="span1 message-metadata">
    <span class="avatar-icon">
        <img src="{{ $message->user()->first()->avatar }}" alt="{{ $message->user()->first()->name }}">
    </span>
    
</section>
<section class="span7 message-body">
    {{ $message->message }}
    <hr>
    <h4>{{ $message->user()->first()->name }}</h4>
    <time>{{ date("jS F Y", strtotime($message->created_at)) }}</time>
</section>