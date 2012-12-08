<section class="patient-profile">
    <div class="patient-img">
        <span class="avatar-icon">
            <div class="avatar-frame">
					<img src="/img/patient.jpg">
				</div>
        </span>
    </div>
    <h2 class="patient-profile">{{ $patient->name }}</h2>
    
    <h3>Care of {{ $patient->user()->first()->name }}</h3>

    <div class="patient-address">
        <strong>Address</strong> {{ $patient->address }}
    </div>

	Age: {{$patient->age}}<br />
	Gender: {{$patient->gender}}<br />
	Medical History: {{$patient->history}}<br />
	Medication: {{$patient->medication}}<br />
	Allergies: {{$patient->allergies}}<br />
</section>
