<!-- This will use the template (header, footer) of layout.blade.php -->
@extends('site.master.layout');

<!-- This will replace the 'content' yield of layout -->
@section('content')

    <div class="container py-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Contact Us!</h1>
            <p class="lead">Send a message.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        </div>

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Your Message to Us</label>
                <textarea class="form-control" id="exampleInputText1"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection