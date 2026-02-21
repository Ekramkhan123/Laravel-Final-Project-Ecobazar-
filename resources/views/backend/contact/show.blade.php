@extends('backend.layout')
@section('backend_content')

<style>
    .contacts-table {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
    }

    .contacts-table table {
        min-width: 900px;
        white-space: nowrap;
    }

    .contacts-table td,
    .contacts-table th {
        vertical-align: middle;
    }

</style>

<div class="content-wrapper">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">All Contacts</h4>
            <a href="{{ route('dashboard.contact.index') }}" class="btn btn-primary">Add New Contact</a>
        </div>

        <div class="card-body">

            <div class="table-responsive contacts-table">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="thead-dark">
                        <tr>
                            <th style="min-width:50px">#</th>
                            <th style="min-width:220px">Address</th>
                            <th style="min-width:200px">Emails</th>
                            <th style="min-width:200px">Phone Numbers</th>
                            <th style="min-width:160px">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td style="min-width:200px">
                                    {{ $contact->address }}
                                </td>

                                <td style="min-width:180px">
                                    @foreach($contact->emails as $email)
                                        <span class="badge bg-info text-dark mb-1 d-inline-block">
                                            {{ $email->email }}
                                        </span><br>
                                    @endforeach
                                </td>

                                <td style="min-width:180px">
                                    @foreach($contact->numbers as $number)
                                        <span class="badge bg-success text-white mb-1 d-inline-block">
                                            {{ $number->number }}
                                        </span><br>
                                    @endforeach
                                </td>

                                <td style="min-width:150px">
                                    <a href="{{ route('dashboard.contact.edit', $contact->id) }}"
                                    class="btn btn-sm btn-primary mb-1">
                                        Edit
                                    </a>

                                    <a href="{{ route('dashboard.contact.delete', $contact->id) }}"
                                    onclick="return confirm('Are you sure to delete this contact?');"
                                    class="btn btn-sm btn-danger mb-1">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No contacts found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

@endsection
