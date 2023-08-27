 
  @extends('abb')
  @section('book')

    <div class = "container">
        <div class ="row">
            <div class="col-md-12">
                @if(session('status'))
                    <h4 class ="alert alert-warning mb-2">
                       {{session('status')}}         
                    </h4>
                @endif
                <div class ="card">
                    <div class="card-header">
                        <h4> Book List 
                        <!-- <a href "{{ url('add-book') }}" class =""btn btn-sm btn-primary float-end"> Add Book</a> -->
                        <a href="{{ url('add-book') }}" class="btn btn-sm btn-primary float-end" title="Add New Book">
                            Add New Book
                        </a>
                        </h4>

                        </div>
                        <div class ="card-body">

                            <table class ="table table-borderd">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                        <th>الاسم</th>
                                        <th>اسم المؤلف</th>
                                        <th>السعر</th>
                                        <th>عدد الكتب</th>
                                        <th>عدد صفحات الكتاب</th>
                                        <th>المدة لتسليم الكتاب</th>
                                        <th>الوصف</th>
                                        <th>تصنيف الكتاب</th>
                                        <th>الصورة</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $key => $item)
                    <tr>
                    <td> {{$loop->iteration}}</td>
                    <td> {{ $item['name'] }}</td>
                    <td> {{$item['name_auther']}}</td>
                    <td> {{$item['price']}}</td>
                    <td> {{$item['count']}}</td>
                    <td> {{$item['pages']}}</td>
                     <td> {{$item['description']}}</td>
                    <td> {{$categories[$item['cat_book']]['name']}}</td>
                    
                    @php
                    if(isset($item['image'])){
                    $imagePath = $item['image'];
                }else{
                    $imagePath ='';
                }
                    @endphp

                     <td><img src="{{ url($imagePath) }}" alt="Image" width = 100 hieght=100></td>
                     <td><a href ="{{url('edit-book/'.$key)}}" class ="btn btn-sm btn-success">Edit</td>
                    <td><a href ="{{url('delete-book/'.$key)}}" class ="btn btn-sm btn-danger">Delete</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
  @endsection