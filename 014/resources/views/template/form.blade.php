@extends('template.master.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('course.store') }}" method="post" autocomplete="off">
                    @csrf

                    <div class="form-group">
                        <label for="name">Course</label>
                        <input 
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Course Name"
                            value="{{ old('name') }}"
                            class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"
                        />
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tutor">Tutor</label>
                        <input
                            type="text"
                            name="tutor"
                            id="tutor"
                            placeholder="Tutor Name"
                            value="{{ old('tutor') }}"
                            class="form-control {{ ($errors->has('tutor') ? 'is-invalid' : '') }}"
                        />
                        @if($errors->has('tutor'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tutor') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input 
                            type="text"
                            name="email"
                            id="email"
                            placeholder="E-mail"
                            value="{{ old('email') }}"
                            class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}"
                        />
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
