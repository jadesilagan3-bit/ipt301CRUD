<h1>Add Patient</h1>
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone" required><br><br>
    <button type="submit">Save</button>
</form>s