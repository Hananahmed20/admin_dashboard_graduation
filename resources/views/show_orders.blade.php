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
                        <h4> Orders List 
                         <a href="{{ url('Books') }}" class="btn btn-sm btn-primary float-end" title="Back">
                         Back
                        </a>
                        </h4>
                        </div>
                        <div class ="card-body">
                            <table class ="table table-borderd">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>الاسم</th>
                                    <th>اسم الكتاب</th>
                                        <th> حالةالطلب </th>
                                        <th>العنوان</th>
                                         <th>رقم الهاتف </th>
                                         <th> ارسال الطلب</th>
                                         <th>الغاء الطلب</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $item)
                    <tr>
                    <td> {{$loop->iteration}}</td>
                    <td> {{$item['name']}}</td>
                    <td> {{$item['book']}}</td>
                    <td> {{$item['state']}}</td>
                    <td> {{ $item['address'] }}</td>
                    <td> {{$item['phone']}}</td>
                    <td><a href ="{{url('send-book/'.$key)}}" class ="btn btn-sm btn-success">ارسال</td>
                    <td><a href ="{{url('delete-book/'.$key)}}" class ="btn btn-sm btn-danger">Cancel</td>
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