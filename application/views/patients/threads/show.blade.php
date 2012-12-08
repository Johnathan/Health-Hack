@layout('layouts.master')

@section('content')
    @include('patients._profile')

    <h2>{{$thread->title}}</h2>
@endsection
