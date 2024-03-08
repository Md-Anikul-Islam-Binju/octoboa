@extends('admin.app')
@section('admin_content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Octoboa</a>
        <a class="breadcrumb-item" href="#">Tables</a>
        <span class="breadcrumb-item active">Faq Table</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Faq List
                <a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Faq Add</a>
            </h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">S/N</th>
                        <th class="wd-15p">Title Arabic</th>
                        <th class="wd-15p">Title English</th>
                        <th class="wd-20p">Status</th>
                        <th class="wd-15p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faq as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$data->title_arabic}}</td>
                            <td>{{$data->title_english}}</td>
                            <td>{{$data->status==1?'Active':'Inactive'}}</td>
                            <td>
                                <button  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{$data->id}}">Edit</button>
                                <a href="{{route('faq.delete',$data->id)}}" class="btn btn-danger btn-sm delete-category" data-toggle="modal" data-target="#deleteModal{{$data->id}}" data-category-id="{{$data->id}}">Delete</a>
                            </td>
                        </tr>

                        <div id="editModal{{$data->id}}" class="modal fade"  aria-labelledby="editModalLabel{{$data->id}}">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-150">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="editModalLabel{{$data->id}}">Faq Information Update</h6>
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
                                    <form action="{{route('faq.update',$data->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body pd-20">
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Title Name Arabic</label>
                                                <input type="text" class="form-control" name="title_arabic" value="{{$data->title_arabic}}"  placeholder="Faq Title Arabic" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Category Name English</label>
                                                <input type="text" class="form-control" name="title_english" value="{{$data->title_english}}"  placeholder="Faq Title English">
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
                                                    <label for="edit-status" class="col-form-label">Faq Status:</label>
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
                                        <h5 class="modal-title" id="deleteModalLabel{{$data->id}}">Delete fAQ</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this FAQ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="{{route('faq.delete',$data->id)}}" class="btn btn-danger">Delete</a>
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
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Faq Add</h6>
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
                <form action="{{route('faq.store')}}" method="post">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="exampleInputCategory">Title Name Arabic</label>
                            <input type="text" class="form-control" name="title_arabic" placeholder="Faq Title Arabic" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Category Name English</label>
                            <input type="text" class="form-control" name="title_english" placeholder="Faq Title English">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCategory">Description Arabic</label>
                            <textarea type="text" class="form-control" name="description_arabic"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Description English</label>
                            <textarea type="text" class="form-control" name="description_english"></textarea>
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
