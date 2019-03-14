@extends('default.layouts.layout')

@section('content')

    <div class="col-md-9">
        <div class="">
            <h2>Contact us!</h2>
        </div>

        <p>
            This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>

        <form method="post" action="{{ route('contact') }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Jane Doe">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" value="timur@ukr.net" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="site">Site</label>
                <input type="text" class="form-control" id="site" value="" name="site" placeholder="Site">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection