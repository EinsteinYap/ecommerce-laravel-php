@extends('admin.layouts.master')

@section('content')
 <!-- Main Content -->
    <section class="section">
      <div class="section-header">
        <h1>Slider</h1>

      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Slider</h4>

              </div>
              <div class="card-body">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Banner</label>
                        <input type="file" class="form-control" data-tribute="true" name="banner">
                    </div>
                    <div class="form-group">
                        <label for="">Type</label>
                        <input type="text" class="form-control" data-tribute="true" name="type" value="{{ old('type') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" data-tribute="true" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Starting Price</label>
                        <input type="text" class="form-control" data-tribute="true" name="starting_price" value="{{ old('starting_price') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Button URL</label>
                        <input type="text" class="form-control" data-tribute="true" name="btn_url" value="{{ old('btn_url') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Serial</label>
                        <input type="text" class="form-control" data-tribute="true" name="serial" value="{{ old('serial') }}">
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

@endsection
