<h1>Appointments</h1>
<a href="{{ route('appointments.create') }}">Add Appointment</a>
<table border="1">
    <thead>
        <tr>
            <th>Patient</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->patient->name }}</td>
            <td>{{ $appointment->appointment_date }}</td>
            <td>{{ $appointment->status }}</td>
            <td>
                <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>