@layout('layouts.master')

@section('content')
    <h1>Edit: {{ $patient->name }}</h1>

    @include('patients._form')
@endsection