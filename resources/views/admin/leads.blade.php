@extends('layouts.admin')
@section('content')
 <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

        
          <div class="container-xxl flex-grow-1 container-p-y">
            <br><br>
            
<h4 class="fw-semibold mb-4">Leads {{$leads_title}}</h4>

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
            

 
<!-- Permission Table -->
<div class="card">
  <div class="card-datatable table-responsive">

    <table class="table ClientsTable datatables-users table border-top"> 
      
      <a href="{{route('trashed.leads')}}" style="float: right;" role="button" aria-disabled="true">
       <button type="button" class="btn btn-secondary float-start">Trash</button>
     </a>
@if(isset($message))

<figure class="text-center">
  <blockquote class="blockquote"><br>
     <p>{{ $message }}</p>
  </blockquote>
</figure>

@else          
      <thead>
        <tr>
          <th></th>
          <th>Name</th>            
          <th>date</th>              
          <th>comming from</th>              
          <th>Actions</th>              
        </tr>
      </thead>

      <tbody>
        @isset($clients)
        @foreach($clients as $client)
            <tr>
              <td scope="row">{{ $clients->firstItem() + $loop->index }}</td>
                <td>{{$client -> name}}</td>            
                <td>{{$client->created_at}}</td>                    
                <td>https://mylander.online/landing/{{$client->comming_from}}</td>
                <td>

                      <a href="{{route('edit.lead',$client->id)}}" class="btn btn-label-primary me-3" >Edit</a>
 
                      <a href="{{route('delete.lead',$client->id)}}" id="" class="btn btn-label-secondary delete">Delete</a>
                    
                </td>               
            </tr>
        @endforeach
        @endisset
                                           
      </tbody>
    </table>
   <div>
    
{!! $clients->links() !!}
  </div>
@endif
  </div>
</div>
@stop

@section('scripts')


  @stop