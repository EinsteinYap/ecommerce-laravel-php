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
                <h4>Create Category</h4>

              </div>
              <div class="card-body">
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Icon</label>
                        <button class="btn btn-primary"
                        data-arrow-class="btn-success"
                        data-unselected-class="btn-info"
                        data-selected-class="btn-selected"
                        role="iconpicker"
                        name="icon"
                        ></button>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <div>
                            <input type="text" class="form-control" data-tribute="true" name="name" value="{{ old('name') }}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status" value="{{ old('status') }}">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Create</button>
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

