<x-layout>
    <div class="container">
        <h1>Welcome, {{ $hospital->hospital_name ?? 'Hospital' }}</h1>
        <p>Status: <strong>{{ $hospital->status }}</strong></p>

        @if ($hospital->status === 'pending')
            <div class="alert alert-warning">
                Your account is pending approval by the admin.
            </div>
        @elseif($hospital->status === 'approved')
            <div class="alert alert-success">
                Your hospital is approved. You can now manage appointments and doctors!
            </div>
        @endif
    </div>
</x-layout>
