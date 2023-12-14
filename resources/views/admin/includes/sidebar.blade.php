
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="#" class="app-brand-link">
      <img src="{{asset('assets/images/slack.png')}}">
      <br>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item">
  
  <li class="menu-item">
      <a href="{{route('dashboard2')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
  
    </li>


  
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ti ti-file-dollar'></i>
        <div data-i18n="Leads">Leads</div>
      </a>
      <ul class="menu-sub">
       
        <li class="menu-item">
          <a href="{{route('all.leads')}}" class="menu-link">
            <div data-i18n="all leads">all leads</div>
          </a>
        </li>
    
        <li class="menu-item">
          <a href="{{route('leads','new-lead')}}" class="menu-link">
            <div data-i18n="new leads">new leads</div>
          </a>
        </li> 
        
      </ul>
    </li>
 



    <!-- Components -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">statuses</span>
    </li>
    <!-- Cards -->
      <li class="menu-item">
      <a href="{{route('add.status')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-layout-grid"></i>
        <div data-i18n="Add status">Add status</div>
      </a>
    </li>
      </ul>
    </li>
 

   
  </ul>
  
  

</aside>