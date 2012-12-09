<div class="patient-img">
    <span class="avatar-icon">
        <img src="{{ $patient->avatar }}" alt="{{ $patient->name }}">
    </span>
</div>

<section class="patient-profile">
    <h3>{{ $patient->name }}</h3>
    <h4><span class="wee-font">Care of</span> {{ $patient->user()->first()->name }}</h4>

    <section class="patient-profile-info">
        <div class="content-block">
    	   <h4>Age:&nbsp;&nbsp;<span class="info">{{$patient->age}}</span>&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp;<span class="info">{{$patient->gender}}</span></h4>
        </div>

        <div class="content-block">
        	<h4>Medical History:</h4>
            {{$patient->medical_history}}
        </div>

        <div class="content-block">
        	<h4>Medication:</h4>
            {{$patient->medication}}
        </div>

        <div class="content-block">
        	<h4>Allergies:</h4>
            {{$patient->allergies}}
        </div>
        <a href="{{ URL::to('/patients/edit/'.$patient->id) }}" class="btn">Update Information</a>
    </section>
    
</section>