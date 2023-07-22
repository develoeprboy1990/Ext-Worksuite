@extends('template.tmp')
@section('title', $pagetitle)
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @if (session('error'))
            <div class="alert alert-{{ Session::get('class') }} p-1" id="success-alert">        
                {{ Session::get('error') }}  
            </div>
            @endif
            @if (count($errors) > 0)
            <div>
                <div class="alert alert-danger p-2 border-1">
                   <p class="font-weight-bold"> There were some problems with your input.</p>
                    <ul>
                        
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>
                </div>
            </div>
            @endif   
            <div class="row">
                <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">JOBS LIST</h4>
                    <div class="page-title-right ">
                      <div class="btn-group  shadow-sm dropstart">
                         <a href="{{URL('/add-job')}}" class="btn btn-primary"> + New </a>
                      </div>
                    </div>
                  </div>
                </div>  
            </div>         
            <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No#</th>
                                                    <th scope="col">Project Name</th>
                                                    <th scope="col">Delivery Date Date</th>
                                                    <th scope="col">Controller Type</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($jobs as $key => $job)
                                                    <tr>

                                                        <td>
                                                            {{++$key}}
                                                        </td>
                                                        <td>
                                                            {{$job->name ?? 'N/A'}}
                                                        </td>
                                                        <td>{{$job->delivery_date ?? 'N/A'}}</td>
                                                        <td>{{$job->controller_type ?? 'N/A'}}</td>
                                                        <td>
                                                            <div class="d-flex align-items-center col-actions">
                                                                <!-- <a href="{{URL('/ProjectView/1'.@$row->ProjectID)}}">
                                                                    <i class="font-size-18 mdi mdi-eye-outline align-middle me-1 text-secondary"></i>
                                                                </a> 
                                                                <a href="{{URL('/ProjectEdit/'.@$row->ProjectID)}}">
                                                                    <i class="font-size-18 mdi mdi-pencil align-middle me-1 text-secondary"></i>
                                                                </a> 
                                                                <a  target="_blank" href="{{URL('/ProjectViewPDF/'.@$row->ProjectID)}}">
                                                                    <i class="font-size-18 mdi mdi-file-pdf-outline align-middle me-1 text-secondary"></i>
                                                                </a>  -->
                                                                <a href="javascript:void(0)" onclick="delete_confirm2('deleteJob',{{$job->id}})">
                                                                    <i class="font-size-18 mdi mdi-trash-can-outline align-middle me-1 text-secondary"></i>
                                                                </a> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
<!-- my own model -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
         <div class="modal-body">
         <p class="text-center">Are you sure to delete this information ?</p>
         <p class="text-center">
            
            
 
                <a href="#" class="btn btn-danger " id="delete_link">Delete</a>
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                    
         </p>
         </div>
              
         </div>
    </div>
 </div>
<!-- END: Content-->
<script type="text/javascript">
$(document).ready(function() {

    function delete_confirm2(url,id) {        


        url = '{{URL::TO('/')}}/'+url+'/'+ id;
        
    
       
        jQuery('#staticBackdrop').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , url);
         
    }
});
</script>
@endsection