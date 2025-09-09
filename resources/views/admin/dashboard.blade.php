<x-layout>
    <div class="container mt-5">
        {{-- <h2>Unverified Hospitals</h2>

        @foreach ($unverifiedHospitals as $hospital)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $hospital->hospital_name }}</h5>
                    <p>Email: {{ $hospital->email }}</p>
                    <p>License: {{ $hospital->license_number }}</p>
                    <p>Contact: {{ $hospital->contact_person }}</p>
                    <p>Phone: {{ $hospital->phone_number }}</p>

                    <form method="POST" action="{{ route('admin.hospital.approve', $hospital->id) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                    </form>

                    <form method="POST" action="{{ route('admin.hospital.reject', $hospital->id) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                    </form>
                </div>
            </div>
        @endforeach --}}

        {{-- <h2>Unverified Hospitals</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>License</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($unverifiedHospitals as $hospital)
                    <tr>
                        <td>{{ $hospital->hospital_name }}</td>
                        <td>{{ $hospital->email }}</td>
                        <td>{{ $hospital->license_number }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.hospitals.verify', $hospital->id) }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-sm btn-success">Verify</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No unverified hospitals.</td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}

        {{-- <div class="container mt-4"> --}}

        {{-- <h2>Unverified Hospitals</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hospital Name</th>
                    <th>Email</th>
                    <th>License</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($unverifiedHospitals as $hospital)
                    <tr>
                        <td>{{ $hospital->hospital_name }}</td>
                        <td>{{ $hospital->email }}</td>
                        <td>{{ $hospital->license_number }}</td>
                        <td class="d-flex gap-2">
                            <form action="{{ route('admin.hospital.approve', $hospital->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-success btn-sm">Approve</button>
                            </form>

                            <form action="{{ route('admin.hospital.reject', $hospital->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure to reject?');">
                                @csrf
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No unverified hospitals found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}

        <h2 class="mb-4">Unverified Hospitals</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">License Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($unverifiedHospitals as $hospital)
                        <tr>
                            <td>{{ $hospital->hospital_name }}</td>
                            <td>{{ $hospital->email }}</td>
                            <td>
                                <span class="badge bg-secondary">{{ $hospital->license_number }}</span>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <form method="POST" action="{{ route('admin.hospital.approve', $hospital->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="bi bi-check-circle"></i> Approve
                                        </button>
                                    </form>

                                    <form method="POST" action="{{ route('admin.hospital.reject', $hospital->id) }}"
                                        onsubmit="return confirm('Are you sure you want to reject this hospital?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-x-circle"></i> Reject
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No unverified hospitals.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>


</x-layout>
