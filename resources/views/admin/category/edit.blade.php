@extends('admin.layouts.master')

@section('content')
 <!-- Main Content -->

    <section class="section">
      <div class="section-header">
        <h1>Catergory</h1>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Edit Category</h4>

              </div>
              <div class="card-body">
                <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Icon</label>
                        <button class="btn btn-primary"
                        data-arrow-class="btn-success"
                        data-unselected-class="btn-info"
                        data-selected-class="btn-selected"
                        role="iconpicker"
                        name="icon"
                        data-icon="{{ $category->icon }}"
                        ></button>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <div>
                            <input type="text" class="form-control" data-tribute="true" name="name" value="{{ $category->name }}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status" value="{{ $category->status }}">
                          <option {{ $category->status ==1 ?'selected':'' }} value="1">Active</option>
                          <option {{ $category->status ==0 ?'selected':'' }} value="0">Inactive</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
        .btn-selected{
            background-color: red !important;
            border-color: red !important;
        }
    </style>
@endsection

