 <div class="row">
     <div class="col-12">
         <div class="page-title-box d-sm-flex align-items-center justify-content-between">
             <h4 class="mb-sm-0 font-size-18">Category List</h4>

             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                     <li class="breadcrumb-item active">Categories List</li>
                 </ol>
             </div>

         </div>
     </div>
 </div>
 <!-- end page title -->


 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body border-bottom">
                 <div class="d-flex align-items-center">
                     <h5 class="mb-0 card-title flex-grow-1">Categories Lists</h5>
                     <div class="flex-shrink-0">
                         <button data-bs-toggle="modal" data-bs-target="#create-modal" class="btn btn-primary">Add New
                             Category</button>

                         <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
                         <div class="dropdown d-inline-block">

                             <button type="menu" class="btn btn-success" id="dropdownMenuButton1"
                                 data-bs-toggle="dropdown" aria-expanded="false"><i
                                     class="mdi mdi-dots-vertical"></i></button>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card-body border-bottom">
                 <div class="table-responsive">
                     <table class="table" id="tableData">
                         <thead>
                             <tr class="text-dark  bg-lighten-xl ">
                                 <th>No</th>
                                 <th>Category</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody id="tableList">

                         </tbody>
                     </table>
                 </div>
             </div>
         </div><!--end card-->
     </div><!--end col-->

 </div><!--end row-->
