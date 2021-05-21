@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subscribe Email</div>
                    {{ Form::open(['route' => 'subscribe_emails.update', $subscribeEmail->id, 'method' => 'PUT']) }}
                    <div class="card-body">
                        <div class="mb-3">
                            {{ Form::label('full_name','Full Name', ['class' => 'form-label']) }}
                            {{ Form::text('full_name', $subscribeEmail->full_name, ['id' => 'full_name', 'class' => 'form-control']) }}
                            @if ($errors->has("full_name"))
                                <span class="form-text text-danger">{{$errors->first("full_name")}}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            {{ Form::label('email','Email Address', ['class' => 'form-label']) }}
                            {{ Form::email('email',$subscribeEmail->email, ['id' => 'email', 'class' => 'form-control']) }}
                            @if ($errors->has("email"))
                                <span class="form-text text-danger">{{$errors->first("email")}}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            {{ Form::label('phone','Phone', ['class' => 'form-label']) }}
                            {{ Form::text('phone', $subscribeEmail->phone, ['id' => 'phone', 'class' => 'form-control']) }}
                            @if ($errors->has("phone"))
                                <span class="form-text text-danger">{{$errors->first("phone")}}</span>
                            @endif
                        </div>
                        {{ Form::submit('Subscribe', ['class' => 'btn btn-primary']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
