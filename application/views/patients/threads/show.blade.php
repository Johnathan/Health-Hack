@layout('layouts.master')

@section('content')
    <div class="row">
        <div class="span3">
        @include('patients._profile')
        </div><!-- end span3 -->

        <div class="span9 content-panel">
            <section class="thread-description">
                @if ($thread->urgency === "urgent")
                    <span class="label label-important">Urgent</span>
                @endif
                
                <h3 class="thread-title">
                    {{$thread->title}}<br>
                    <small>Last updated: {{ date("H:i jS M Y", strtotime($thread->updated_at)) }} | <span class="posted">Posted {{ $thread->days_ago }} at {{ date("H:i", strtotime($thread->created_at)) }}</span></small>
                </h3>

                <p>{{ nl2br($thread->message) }}</p>
                
                <hr/>
                
                <p class="thread-meta">There are currently 2 people involved in this discussion</p>
                
                <hr />
                
                 @include('patients.threads.messages._form')
            </section>

            <section class="messages">
               

                @if( $thread->messages()->get() )
                <ol class="thread-messages row">
                    @foreach( $thread->messages()->get() as $message )
                    <li class="span9">
                        @include('patients.threads.messages._list-item')
                    </li>
                    @endforeach
                </ol>
                @else
                <p>No messages yet</p>
                @endif
            </section>
        </div><!-- end span9 -->
    </div><!-- .row -->

@endsection
