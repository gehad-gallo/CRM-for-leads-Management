@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
  <div class="content-wrapper">
        <!-- Content -->
        
    <div class="container-xxl flex-grow-1 container-p-y">
            
                  
      <h4 class="fw-semibold mb-4">Dashboard</h4>

      <!-- Basic Layout -->
      <div class="row">
        <!-- Statistics -->
        <div class="col-xl-12 mb-4 col-lg-7 col-12">
          <div class="card h-100">
            <div class="card-header">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="card-title mb-0"></h5>
                <small class="text-muted">Updated now</small>
              </div>
            </div><br>
            <div class="card-body">
              <div class="row gy-3">
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('all.leads')}}">
                      <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i>
                      </div>
                    </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients->count();}}</h3>
                      <small>All leads</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('leads','no-answer')}}">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i>
                    </div>
                  </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients_no_answer->count();}}</h3>
                      <small>No answer</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('leads','not-interested')}}">
                    <div class="badge rounded-pill bg-label-danger me-3 p-2">
                      <i class="fas fa-bullseye"></i>

                    </div>
                  </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients_ont_interested->count();}}</h3>
                      <small>Not interested</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('leads','whats-app-connected')}}">
                    <div class="badge rounded-pill bg-label-info me-3 p-2">
                      <i class="ti ti-share"></i>
                    </div>
                  </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients_whats_app_connectd->count();}}</h3>
                      <small>Whats app connected</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('leads','ready-to-buy')}}">
                    <div class="badge rounded-pill bg-label-success me-3 p-2">
                      <i class="ti ti-currency-dollar ti-sm"></i>
                    </div>
                  </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients_ready_to_buy->count();}}</h3>
                      <small>Ready to &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  buy</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-4">
                  <div class="d-flex align-items-center">
                    <a href="{{route('leads','purchase-done')}}">
                    <div class="badge rounded-pill bg-label-danger me-3 p-2">
                      <i class="ti ti-shopping-cart ti-sm"></i>
                    </div>
                  </a>
                    <div class="card-info">
                      <h3 class="mb-0">{{$clients_purchase_done->count();}}</h3>
                      <small>Purchase &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  done</small>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <!--/ Statistics -->

      </div>
@stop