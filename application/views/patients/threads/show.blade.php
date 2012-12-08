@layout('layouts.master')

@section('content')
    @include('patients._profile')

    <h2>{{$thread->title}}</h2>

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
    @endif
@endsection
