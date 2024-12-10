<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
@if(session('succses'))
    <p class="alert alert-success">{{session('succses')}}</p>
@endif
<div class="col-lg-12">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>OS</th>
                <th>Name</th>
                <th>Display</th>
                <th>Xotira</th>
                <th>Batareka</th>
                <th>Asosiy kamera</th>
                <th>Old kamera</th>
                <th>Simkarta</th>
                <th>Narxi</th>
                <th>Rasmi</th>
                <th>Edit</th>
                <th>Delet</th>
            </tr>
            </thead>
            <tbody>
            @foreach($phones as $phone)

            <tr>
                <td>{{$phone->id}}</td>
                <td>{{$phone->os}}</td>
                <td>{{$phone->name}}</td>
                <td>{{$phone->display}}</td>
                <td>{{$phone->xotira}}</td>
                <td>{{$phone->batareka}}</td>
                <td>{{$phone->asosiy_kamera}}</td>
                <td>{{$phone->old_kamera}}</td>
                <td>{{$phone->sim_karta}}</td>
                <td>{{$phone->narxi}}</td>
                <td><img src="{{'/image/'.$phone->image}}" alt="" width="100" class="phone-image"></td>
                <td>
                    <button class="btn btn-secondary"><a href="{{route('edit.phone',['id'=>$phone->id])}}">Edit</a></button>
                </td>
                <td><button class="btn btn-danger"><a href="{{route('delete.phone',$phone->id)}}"> Delet</a></button></td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
