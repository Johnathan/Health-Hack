<section class="patient-profile">
    <div class="patient-img">
        <span class="avatar-icon">
            <img src="{{ $patient->avatar }}" alt="{{ $patient->name }}">
        </span>
    </div>
    <h2>{{ $patient->name }}</h2>
    <h3>Care of {{ $patient->user()->first()->name }}</h3>

    <div class="patient-address">
        <strong>Address</strong> {{ $patient->address }}
    </div>
</section>