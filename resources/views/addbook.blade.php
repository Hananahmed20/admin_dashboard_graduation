   <!-- <div class="card-header">Add New Book</div>
  
   <a href="{{ url('/show') }}" class="btn btn-success btn-sm" title="Back">Go to Admin dashboard -->
  
  @extends('abb')
  @section('book')


  <div class = "container">
        <div class ="row">
            <div class="col-md-6">
                <div class ="card">
                    <div class="card-header">
                        <h4> Add Book  
                        <!-- <a href "{{ url('add-book') }}" class =""btn btn-sm btn-primary float-end"> Add Book</a> -->
                        <a href="{{ url('Books') }}" class="btn btn-sm btn-danger float-end" title="Back">Back
                         </a>
                        </h4>

                        </div>
                        <div class ="card-body">
                            <form method="POST" action="{{ url('store_book') }}" enctype="multipart/form-data">
                                @csrf
                                  <div class ="form-group mb-3">   

                                  <label>اسم الكتاب</label></br>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label>تصنيف الكتاب</label>
                                    <select name='cat_book' id ='cat_book'>
                                    <option id=1 value='1' style='color: #6091CCFF'>كتب دينية </option>
                                    <option id=2 value='2' style='color: #6091CCFF'>روايات</option>
                                    <option id=3 value='3' style='color: #6091CCFF'>كتب علمية </option>
                                    <option id=4  value='4' style='color: #6091CCFF'>كتب تاريخية </option>
                                    <option id=5  value='5' style='color: #6091CCFF'>كتب تطوير </option>
                                    <option id=6  value='8' style='color: #6091CCFF'>كتب سياسية </option>
                                    <option id=7 value='7' style='color: #6091CCFF'>قصص أطفال</option>
                                    <option id=8 value='6' style='color: #6091CCFF'>كتب انجليزية</option>

                                    </select>
                                    </div>
                                    <div class ="form-group mb-3">   

                                     <label>اسم المؤلف </label></br>
                                    <input type="text" name="name_auther" id="name_auther" class="form-control"required accept="image/*">                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label>عدد الكتب</label></br>
                                    <input type="number" name="count" id="count" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">  

                                    <label>عدد صفحات الكتاب</label></br>
                                    <input type="number" name="pages" id="pages" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">  

                                    <label>السعر</label></br>
                                    <input type="number" name="price" id="price" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label>الوصف</label></br>
                                    <input type="text" name="description" id="description" class="form-control">                                    </div>

                                    <div class ="form-group mb-3">   

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