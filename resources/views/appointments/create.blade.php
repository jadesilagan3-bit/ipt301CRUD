<h1>Add Appointment</h1>
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
    <select name="patient_id" required>
        <option value="">Select Patient</option>
        @foreach($patients as $patient)
            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
        @endforeach
    </select><br><br>

    <input type="datetime-local" name="appointment_date" required><br><br>

    <select name="status" required>
        <option value="Pending">Pending</option>
        <option value="Confirmed">Confirmed</option>
        <option value="Completed">Completed</option>
    </select><br><br>

    <button type="submit">Save</button>
</form>