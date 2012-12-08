<section class="message-metadata">
    <span class="avatar-icon">
        <img src="{{ $message->user()->first()->avatar }}" alt="{{ $message->user()->first()->name }}">
    </span>
    <h4>{{ $message->user()->first()->name }}</h4>
    <time>{{ date("jS F Y", strtotime($message->created_at)) }}</time>
</section>
<section class="message-body">
    {{ $message->message }}
</section>