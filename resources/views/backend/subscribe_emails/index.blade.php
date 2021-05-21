@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-md btn-success text-white" href="{{ route('subscribe_emails.create') }}">Add Record</a>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">
                        Subscribe Emails
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribeEmails as $key => $subscribeEmail)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $subscribeEmail->full_name }}</td>
                                        <td>{{ $subscribeEmail->email }}</td>
                                        <td>{{ $subscribeEmail->phone }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-primary" href="{{ route('subscribe_emails.edit', $subscribeEmail->id) }}">Edit</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('subscribe_emails.show', $subscribeEmail->id) }}">Show</a>
                                                {{ Form::open(['route' => ['subscribe_emails.destroy', $subscribeEmail->id], 'method' =>'delete']) }}
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                                                {{ FORM::close() }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $subscribeEmails->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
