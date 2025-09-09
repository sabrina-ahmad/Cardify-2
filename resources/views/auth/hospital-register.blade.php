<x-layout :title="'hospital name'">
    <form action="{{ route('register.hospital') }}" method="POST">
        @csrf

        <!-- Fields: hospital_name, license_number, etc. -->
        <input type="text" name="hospital_name" required>
        <input type="text" name="license_number" required>
        <input type="text" name="contact_person" required>
        <input type="text" name="phone_number" required>
        <input type="email" name="email" required>
        <input type="password" name="password" required>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Register Hospital</button>
    </form>

</x-layout>
