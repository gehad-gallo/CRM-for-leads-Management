@extends('layouts.admin')
@section('content')
     <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

        
          <div class="container-xxl flex-grow-1 container-p-y">
            
 <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">Edit lead</h5>

      <form class="card-body" method="post" action="{{route('save.edit.lead',$lead->id)}}">
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

         @csrf
         <input type="text" name="id" value="{{$lead->id}}" hidden />
        <div class="row mb-3">

          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Name</label>
          <div class="col-sm-4">
            <input type="text" id="alignment-full-name" class="form-control" value="{{$lead->name}}" disabled="" />
          </div>
        </div>
       <div class="row mb-3">

          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Phone</label>
          <div class="col-sm-4">
            <input type="text" id="alignment-full-name" class="form-control" value="{{$lead->phone}}" disabled="" />
          </div>
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Registered at</label>
          <div class="col-sm-3">
            <input type="text" id="alignment-birthdate" class="form-control dob-picker"  value="{{$lead->created_at}}" disabled=""/>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Comming from</label>
          <div class="col-sm-4">
            <input type="text" id="alignment-birthdate" class="form-control dob-picker"  value="https://mylander.online/landing/{{$lead->comming_from}}" disabled=""/>
          </div>
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Update history</label>
          <div class="col-sm-3">
              @if(isset($histories) && isset($diff_for_all_history))
                  @foreach($histories as $key => $history)
                      <div class="form-text">
                          {{ (new \App\Models\Client)->getStatusName($history->status_id) }} | {{ $diff_for_all_history[$key] }}
                      </div>
                  @endforeach
              @endif
          </div>
        </div>

         <div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">status</label>
          <div class="col-sm-3">
            <select id="multicol-language" name="status_id" class="select2 form-select">
              <option value="{{$current_status}}" selected>{{$current_status->name}}</option>
              @if(isset($all_statuses))
              @foreach($all_statuses as $status)
                <option value="{{$status->id}}">{{$status -> name}}</option>
              @endforeach
              @endif

            </select>
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