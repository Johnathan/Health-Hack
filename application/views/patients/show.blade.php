@layout('layouts.master')

@section('content')
    
    <div class="row">
        <div class="span3">
        @include('patients._profile')
        </div><!-- end .span3 -->

        <section class="ui-threads span9">
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
    		<a href="/patients/{{$patient->id}}/threads/new" class="btn btn-large btn-success">Add Thread</a>
        </section>
    </div><!-- end .row -->
@endsection
