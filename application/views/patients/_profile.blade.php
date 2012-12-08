<section class="patient-profile">
    <h2>{{ $patient->name }}</h2>

    <div class="patient-address">
        <strong>Address</strong> {{ $patient->address }}
    </div>

	Age: {{$patient->age}}<br />
	Gender: {{$patient->gender}}<br />
	Medical History: {{$patient->history}}<br />
	Medication: {{$patient->medication}}<br />
	Allergies: {{$patient->allergies}}<br />
</section>
