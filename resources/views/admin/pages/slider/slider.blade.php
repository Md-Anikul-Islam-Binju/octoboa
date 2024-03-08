@extends('admin.app')
@section('admin_content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Octoboa</a>
        <a class="breadcrumb-item" href="#">Tables</a>
        <span class="breadcrumb-item active">Slider Table</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Slider List
                <a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Slider Add</a>
            </h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">S/N</th>
                        <th class="wd-20p">Image</th>
                        <th class="wd-15p">Category</th>
                        <th class="wd-15p">Title Arabic</th>
                        <th class="wd-15p">Title English</th>
                        <th class="wd-15p">Link</th>
                        <th class="wd-20p">Status</th>
                        <th class="wd-15p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <img src="{{'storage/'.$data->image}}" style="height: 100px; width: 100px;">
                            </td>
                            <td>Cat</td>
                            <td>{{$data->title_arabic}}</td>
                            <td>{{$data->title_english}}</td>
                            <td>{{$data->link}}</td>
                            <td>{{$data->status==1?'Active':'Inactive'}}</td>
                            <td>
                                <button  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{$data->id}}">Edit</button>
                                <a href="{{route('slider.delete',$data->id)}}" class="btn btn-danger btn-sm delete-category" data-toggle="modal" data-target="#deleteModal{{$data->id}}" data-category-id="{{$data->id}}">Delete</a>
                            </td>
                        </tr>

                        <div id="editModal{{$data->id}}" class="modal fade"  aria-labelledby="editModalLabel{{$data->id}}">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-150">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="editModalLabel{{$data->id}}">Slider Information Update</h6>
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
                                    <form action="{{route('slider.update',$data->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body pd-20">
                                            <div class="form-group">
                                                <label for="edit-status" class="col-form-label">Category:</label>
                                                <select class="form-control" name="category_id" id="edit-status">

                                                    @foreach($category as $categoryData)
                                                        <option value="{{$categoryData->id}}" {{$categoryData->id == $data->category_id ? 'selected' : ''}}>
                                                            {{$categoryData->name_english}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Title Arabic</label>
                                                <input type="text" class="form-control" name="title_arabic" value="{{$data->title_arabic}}"  aria-describedby="emailHelp" placeholder="Title Arabic" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Title English</label>
                                                <input type="text" class="form-control" name="title_english" value="{{$data->title_english}}"  aria-describedby="emailHelp" placeholder="Title English">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Link</label>
                                                <input type="text" class="form-control" name="link" value="{{$data->link}}"  aria-describedby="emailHelp" placeholder="Enter Link">
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
                                        <h5 class="modal-title" id="deleteModalLabel{{$data->id}}">Slider Delete</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this Slider?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="{{route('slider.delete',$data->id)}}" class="btn btn-danger">Delete</a>
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
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Slider Add</h6>
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
                <form action="{{route('slider.store')}}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="edit-status" class="col-form-label">Category:</label>
                            <select class="form-control" name="category_id" id="edit-status">
                                <option>Select Category</option>
                                @foreach($category as $categoryData)
                                    <option value="{{$categoryData->id}}">{{$categoryData->name_english}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Title Arabic</label>
                            <input type="text" class="form-control" name="title_arabic"  aria-describedby="emailHelp" placeholder="Title Arabic" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Title English</label>
                            <input type="text" class="form-control" name="title_english"  aria-describedby="emailHelp" placeholder="Title English">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Link</label>
                            <input type="text" class="form-control" name="link" aria-describedby="emailHelp" placeholder="Enter Link">
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
