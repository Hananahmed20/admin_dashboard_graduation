@extends('abb')
  @section('book')


  <div class = "container">
        <div class ="row">
            <div class="col-md-6">
                <div class ="card">
                    <div class="card-header">
                        <h4> View Book  
                        <!-- <a href "{{ url('add-book') }}" class =""btn btn-sm btn-primary float-end"> Add Book</a> -->
                        <a href="{{ url('Books') }}" class="btn btn-sm btn-danger float-end" title="Back">Back
                         </a>
                        </h4>

                        </div>
                        <div class ="card-body">
                             <form  action="" method="POST"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                  <div class ="form-group mb-3">   
                                    <tr>
                                        <th>
                                            dd
                                        </th>
                                    </tr>
                                    @foreach($editdata as $key => $item)

                                    <tr>
                                    <td> {{ $item['name'] }}</td>

                                    </tr>

                                  <label>اسم الكتاب</label></br>
                                    <input type="text" name="name" value="{{$editdata['name']}}" id="name" class="form-control">
                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label>تصنيف الكتاب</label>
                                    <label>تصنيف الكتاب</label>
                                    <select name='cat_book' id ='cat_book'>
                                        @foreach($categories as $cat)
                                        @if($cat)
                                    <option value="{{ $cat['id'] }}" style='color: #6091CCFF' @if($cat['id'] == $editdata['cat_book']) selected @endif> {{ $cat['name'] }} </option>
                                    @endif
                                    @endforeach
                                    </select>
                                    </div>
                                    <div class ="form-group mb-3">   

                                     <label>اسم المؤلف </label></br>
                                    <input type="text" name="name_auther" id="name_auther"value="{{$editdata['name_auther']}}" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">

                                    <label>عدد الكتب</label></br>
                                    <input type="number" name="count" value="{{$editdata['count']}}" id="count" class="form-control">                                    </div>
                                    <div class ="form-group mb-3"> 

                                    <label>عدد صفحات الكتاب</label></br>
                                    <input type="number" name="pages" id="pages"  value="{{$editdata['pages']}}" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">  

                                    <label>المدة لتسليم الكتاب</label></br>
                                    <input type="text" name="time_del" id="time_del" value="{{$editdata['time_del']}}" class="form-control">                                    </div>
                                    <div class ="form-group mb-3"> 

                                    <label>السعر</label></br>
                                    <input type="number" name="price" value="{{$editdata['price']}}" id="price" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">   

                                    <label>الوصف</label></br>
                                    <input type="text" name="description" value="{{$editdata['description']}}" id="description" class="form-control">                                    </div>

                                    <div class ="form-group mb-3">   

                                    <label>الصورة</label>
                                    @php
                                        if(isset($editdata['image'])){
                                        $imagePath = $editdata['image'];
                                    }else{
                                        $imagePath = '';
                                    }
                                        @endphp

                                     <td><img src="{{ url($imagePath) }}" alt="Image" width = 100 hieght=100></td>

 
                                    <input type="file" name="image"   id="image" class="form-control">                                    </div>
                                    <div class ="form-group mb-3">   

                                    <input type="submit" value="Update" class="btn btn-primary">                                    </div>

                                    </div>

                                </form>
                    </div>

                </div>
            </div>
        </div>
    </div> 


  
 