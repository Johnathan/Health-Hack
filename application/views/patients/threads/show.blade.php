@layout('layouts.master')

@section('content')
    <div class="row">
        <div class="span3">
        @include('patients._profile')
        </div><!-- end span3 -->

        <div class="span9">
            <section class="thread-description">
                <h1 class="thread-title">
                    {{$thread->title}}
                    <small>Last updated: {{ date("H:i jS M Y", strtotime($thread->updated_at)) }}</small>
                </h2>

                <p>{{ nl2br($thread->message) }}</p>
            </section>

            <section class="messages">
                @include('patients.threads.messages._form')

                @if( $thread->messages()->get() )
                <ol class="thread-messages">
                    @foreach( $thread->messages()->get() as $message )
                    <li>
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
