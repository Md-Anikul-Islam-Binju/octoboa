@extends('admin.app')
@section('admin_content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Octoboa</a>
        <a class="breadcrumb-item" href="#">Tables</a>
        <span class="breadcrumb-item active">Testimonial Table</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Testimonial List
                <a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Testimonial Add</a>
            </h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">S/N</th>
                        <th class="wd-20p">Image</th>
                        <th class="wd-15p">Name Arabic</th>
                        <th class="wd-15p">Name English</th>
                        <th class="wd-15p">Designation Arabic</th>
                        <th class="wd-15p">Designation English</th>
                        <th class="wd-20p">Status</th>
                        <th class="wd-15p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonials as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <img src="{{'storage/'.$data->image}}" style="height: 100px; width: 100px;">
                            </td>
                            <td>{{$data->name_arabic}}</td>
                            <td>{{$data->name_english}}</td>
                            <td>{{$data->designation_arabic}}</td>
                            <td>{{$data->designation_english}}</td>
                            <td>{{$data->status==1?'Active':'Inactive'}}</td>
                            <td>
                                <button  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{$data->id}}">Edit</button>
                                <a href="{{route('testimonial.delete',$data->id)}}" class="btn btn-danger btn-sm delete-category" data-toggle="modal" data-target="#deleteModal{{$data->id}}" data-category-id="{{$data->id}}">Delete</a>
                            </td>
                        </tr>

                        <div id="editModal{{$data->id}}" class="modal fade"  aria-labelledby="editModalLabel{{$data->id}}">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-150">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="editModalLabel{{$data->id}}">Testimonial Information Update</h6>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('testimonial.update',$data->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body pd-20">
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Name Arabic</label>
                                                <input type="text" class="form-control" name="name_arabic" value="{{$data->name_arabic}}"  aria-describedby="emailHelp" placeholder="Name Arabic" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Name English</label>
                                                <input type="text" class="form-control" name="name_english" value="{{$data->name_english}}"  aria-describedby="emailHelp" placeholder="Name English">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Designation Arabic</label>
                                                <input type="text" class="form-control" name="designation_arabic" value="{{$data->designation_arabic}}"  aria-describedby="emailHelp" placeholder="Designation Arabic" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Designation English</label>
                                                <input type="text" class="form-control" name="designation_english" value="{{$data->designation__english}}"  aria-describedby="emailHelp" placeholder="Designation English">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputCategory">Description Arabic</label>
                                                <textarea type="text" class="form-control" name="description_arabic">{{$data->description_arabic}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Description English</label>
                                                <textarea type="text" class="form-control" name="description_english">{{$data->description_english}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="edit-status" class="col-form-label">Status:</label>
                                                <select class="form-control" name="status" id="edit-status">
                                                    <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Active</option>
                                                    <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$data->id}}"  aria-labelledby="deleteModalLabel{{$data->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{$data->id}}">Delete Testimonial</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this testimonial?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="{{route('testimonial.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-150">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Testimonial Add</h6>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('testimonial.store')}}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="exampleInputCategory">Name Arabic</label>
                            <input type="text" class="form-control" name="name_arabic" aria-describedby="emailHelp" placeholder="Name Arabic" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Name English</label>
                            <input type="text" class="form-control" name="name_english" aria-describedby="emailHelp" placeholder="Name English">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCategory">Designation Arabic</label>
                            <input type="text" class="form-control" name="designation_arabic"  aria-describedby="emailHelp" placeholder="Designation Arabic" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Designation English</label>
                            <input type="text" class="form-control" name="designation_english"  aria-describedby="emailHelp" placeholder="Designation English">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCategory">Description Arabic</label>
                            <textarea type="text" class="form-control" name="description_arabic"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Description English</label>
                            <textarea type="text" class="form-control" name="description_english"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Image</label>
                            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
