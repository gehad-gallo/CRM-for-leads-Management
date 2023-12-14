@extends('layouts.admin')
@section('content')
     <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

        
          <div class="container-xxl flex-grow-1 container-p-y">
            
 <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">Edit lead</h5>

      <form class="card-body" method="POST" action="{{route('save.add.status')}}">
          @csrf
          <br><br>

         @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif  

        
        
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Status </label>
          <div class="col-sm-3">
            <input type="text" id="alignment-birthdate" class="form-control dob-picker" name="status_name"/>
            @error('status_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
          </div>
        </div>
        
      

        <div class="pt-4">
          <div class="row justify-content-end">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary me-sm-2 me-1">Submit</button>
              <a href="{{route('dashboard2')}}" class="btn btn-label-secondary">Cancel </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
          </div>
@stop