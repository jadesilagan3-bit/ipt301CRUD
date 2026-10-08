<h1>Edit Appointment</h1>
<form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')

    <select name="patient_id" required>
        @foreach($patients as $patient)
            <option value="{{ $patient->id }}" {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>
                {{ $patient->name }}
            </option>
        @endforeach
    </select><br><br>

    <input type="datetime-local" name="appointment_date" value="{{ date('Y-m-d\TH:i', strtotime($appointment->appointment_date)) }}" required><br><br>

    <select name="status" required>
        <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Confirmed" {{ $appointment->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
        <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>Completed</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>