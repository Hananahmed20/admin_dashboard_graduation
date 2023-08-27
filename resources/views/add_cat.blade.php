   <!-- <div class="card-header">Add New Book</div>
  
   <a href="{{ url('/show') }}" class="btn btn-success btn-sm" title="Back">Go to Admin dashboard -->
  
   @extends('abb')
  @section('book')


  <div class = "container">
        <div class ="row">
            <div class="col-md-6">
                <div class ="card">
                    <div class="card-header">
                        <h4> Add Categoty  
                         <a href="{{ url('Books') }}" class="btn btn-sm btn-danger float-end" title="Back">Back
                         </a>
                        </h4>

                        </div>
                        <div class ="card-body">
                            <form method="POST" action="{{ url('store_cat') }}" enctype="multipart/form-data">
                                @csrf

                             
                                    <div class ="form-group mb-3">   

                                     <label>اسم التصنيف </label></br>
                                    <input type="text" name="cat_name" id="cat_name" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label> id</label></br>
                                    <input type="number" name="id" id="id" class="form-control" required>                                    </div>
                                    <label>الصورة</label>
                                    <input type="file" name="image" id="image" class="form-control">                                    </div>
                                    
                                    <div class ="form-group mb-3">   

                                    <input type="submit" value="Save" class="btn btn-primary">                                    </div>

                                    </div>

                                </form>
                    </div>

                </div>
            </div>
        </div>
    </div> 


  
 @endsection