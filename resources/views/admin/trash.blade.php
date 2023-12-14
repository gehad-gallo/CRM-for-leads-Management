@extends('layouts.admin')
@section('content')
 <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

        
          <div class="container-xxl flex-grow-1 container-p-y">
            <br><br>
            
<h4 class="fw-semibold mb-4">All trashed Leads</h4>

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
          <th>Mobile</th>            
          <th>status</th>            
          <th>date</th>              
          <th>Actions</th>  
        </tr>
      </thead>

      <tbody>

 
        @isset($leads)

        @foreach($leads as $lead)
            <tr>

                <td scope="row">{{ $leads->firstItem() + $loop->index }}</td>
                <td>{{$lead -> name}}</td>
                <td>{{$lead -> phone}}</td>  
                <td>{{$lead->getClientStatus($lead->status)}}</td>             
                <td>{{$lead->created_at}}</td>               
                <td>

                      <a href="{{route('activate.lead',$lead->id)}}" class="btn btn-label-primary me-3" >Activate again</a>
 
                     
                    
                </td>                                              
            </tr>
        @endforeach
        @endisset
                                           
      </tbody>
    </table>



   <div>
    
{!! $leads->links() !!}
  </div>
@endif
  </div>
</div>
@stop

@section('scripts')


  @stop