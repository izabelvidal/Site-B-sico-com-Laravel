@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('contact-form-submit') }}">
        @csrf 


        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" name="name" id="name"  placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="subject" class="form-control" name="subject" id="subject"  placeholder="Enter subject">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('sidebar')
    @parent
    <p>o sidebar tá aqui</p>
@endsection
