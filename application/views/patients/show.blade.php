@layout('layouts.master')

@section('content')
    <a href="{{ URL::to('/patients/edit/'.$patient->id) }}">Edit</a>
    @include('patients._profile')

    <section class="ui-threads">
        @if( $patient->threads()->get() )
            <ol class="ui-threads-list">
            @foreach( $patient->threads()->get() as $thread )
                <li>
                    @include('patients.threads._list-item')
                </li>
            @endforeach
            </ol>
        @else
            <p>{{ $patient->name }} has no threads yet.</p>
        @endif
		<a href="/patients/{{$patient->id}}/threads/new">Add Thread</a>
    </section>
@endsection
