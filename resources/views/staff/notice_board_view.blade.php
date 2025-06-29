@extends('template.staff_tmp')

@section('title', $pagetitle)
 

@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> Official Notices</h4>

                                    <div class="page-title-right">
                                        <div class="page-title-right">
                                         <!-- button will appear here -->

                                         

                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

 @if (session('error'))

<div class="alert alert-{{ Session::get('class') }} p-3"  id="success-alert">
                    
                  <strong>{{ Session::get('error') }} </strong>
                </div>

@endif

  @if (count($errors) > 0)
                                 
                            <div >
                <div class="alert alert-danger pt-3 pl-0   border-3 bg-danger text-white">
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
                <div class="col-xl-12">
                    <div class="card">
                         <div class="card-body table-responsive">

                            <table class="table mb-0">
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                <tbody>
                                    @if(!$notice->isEmpty())        
                                        @foreach ($notice as $key =>$value)
                                         <tr valign="top" >
                                          <td ><strong>{{$value->Title}}</strong></td>
                                         
                                         <td ><span class="badge  {{($value->Status=='Draft') ?'badge bg-warning' : 'bg-primary'}}">{{$value->Status}}</span></td>
                                         <td >{{dateformatman($value->Date)}}</td>
                                         </tr>
                                        <tr>
                                             <td colspan="3"><div ><?php echo $value->Detail; ?></div></td>
                                        </tr>
                                         @endforeach  
                                          @else
                                           
                                         <tr>
                                             <td colspan="6" class="bg bg-light text-center">
                                           No data found      
                                             </td>
                                         @endif
                                         </tr> 
                                         </tbody>
                                         </table> 

                                            </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                           
            </div>
            <!-- end row -->

                      

                       

                         
                     
                        
                    </div> <!-- container-fluid -->
                </div>


  @endsection
