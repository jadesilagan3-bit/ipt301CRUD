<h1>Edit Patient</h1>
<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $patient->name }}" required><br><br>
    <input type="email" name="email" value="{{ $patient->email }}" required><br><br>
    <input type="text" name="phone" value="{{ $patient->phone }}" required><br><br>
    <button type="submit">Update</button>
</form>