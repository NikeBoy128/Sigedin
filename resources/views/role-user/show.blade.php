@extends('layouts.app')

@section('template_title')
    {{ $roleUser->name ?? "{{ __('Show') Role User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Role User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('role-users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Role Id:</strong>
                            {{ $roleUser->role_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $roleUser->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
