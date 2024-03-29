@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.question.update',$editdata->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="">Quiz_id</label>
                                <select name="quiz_id" id="" value="{{ $editdata->quiz_id }}" class="form-control">
                                    @foreach ($quiz as $data)
                                        <option {{ $editdata->quiz_id == $data->id?'selected':''}} value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="form-group col-md-6">
                                 <label for="">question_name</label>
                                 <input type="text" value="{{ $editdata->title }}" name="title" class="form-control">
                             </div>
                             <div class="form-group col-md-6">
                              <label for="">Mark</label>
                              <input type="text" value="{{ $editdata->mark }}" name="mark" class="form-control">
                          </div>


                          <div class="form-group col-md-6">
                            <label for="">Is_multipal</label>
                            <input type="text" value="{{ $editdata->is_multipol }}" name="is_multipol" class="form-control">
                        </div>

                        </div>

                              <button>update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    