@layout('layouts.master')

@section('content')
<section class="patient-profile">
    <h2>{{ $patient->name }}</h2>

    <div class="patient-address">
        <strong>Address</strong> {{ $patient->address }}
    </div>
</section>

<section class="ui-threads">
    @if( isset($threads) && count($threads) > 0 )
        <ol class="ui-threads-list">
        @foreach( $threads as $thread )
            <li>
                <h3><a href="{{ URL::to('/patients/'.$patient->id).'/threads/'.$thread->id }}">{{$thread->title}}</a></h3>

            </li>
        @endforeach
        </ol>
    @else
        <p>You have no patients added yet.</p>
    @endif
</section>
@endsection
