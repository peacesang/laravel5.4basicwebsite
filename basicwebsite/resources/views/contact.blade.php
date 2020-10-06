@extends('layouts.app')
@section('content')
<h1>Contact</h1>
<form action="/contact/submit" method="post">
    {{  csrf_field() }}

    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
    </div>

    <div class="form-group">
        <label for="Email">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>

    <div class="form-group">
        <label for="messages">Messages</label>
        <textarea class="form-control" rows="5"></textarea>
            
    </div>
    
    <input type="submit" vlaue="submit">
       
       
</form>
@endsection