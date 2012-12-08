@layout('layouts.master')

@section('content')
    <h2>My patients</h2>

	@if( isset($patients) && count($patients) > 0 )
		<ul>
		@foreach( $patients as $patient )
			<li><a href="{{ URL::to('/patients/'.$patient->id) }}">{{$patient->name}}</a></li>
		@endforeach
		</ul>
	@else
		<p>You have no patients added yet.</p>
	@endif


@endsection
