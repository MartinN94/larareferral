@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card">
    <div class="card-header">
        {{ __('Select articles:') }}
    </div>
<div class="card-body">
    <form method="POST" action="{{ route('purchase.store') }}">
        @method('POST')
        @csrf
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="articles[]" value="300">
            <label class="form-check-label" for="exampleCheck1">Article one | Price: 300</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="articles[]" value="500">
            <label class="form-check-label" for="exampleCheck1">Article two | Price: 500</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="articles[]" value="250">
            <label class="form-check-label" for="exampleCheck1">Article three | Price: 250</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="articles[]" value="380">
            <label class="form-check-label" for="exampleCheck1">Article four | Price: 380</label>
          </div>
          <button type="submit" class="btn btn-primary">Buy</button>
      </form>
</div>
</div>
        </div>
    </div>
</div>
@endsection