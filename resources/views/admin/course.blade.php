@extends('admin.base')

@section('content')
        <!-- Main content -->
        <div class="content-wrapper">
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Manage Courses ({{ count($courses) }})</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Manage Courses</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-sm">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Duration</th>
                    <th>price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($courses as $item)

                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>
                            <div class="d-flex flex-column">
                                <div>{{ $item->title }}</div>
                                <div class="small text-muted capitalize">{{ $item->category->cat_title }}</div>
                            </div>
                          </td>
                          <td>{{ $item->duration }}</td>
                          <td>{{ $item->fees }}</td>
                          <td>
                            @if ($item->image)
                                <img width="80px" src="{{ asset('public/images/'.$item->image) }}"/>
                            @endif
                          </td>
                          <td>
                              @if($item->status) 
                                <span class='badge bg-success'>Live</span>
                              @else
                                <span class='badge bg-red'>Offline</span>
                              @endif
                          </td>
                          <td class="d-flex" style="gap:10px">
                              <form action="{{ route('courses.destroy',$item) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                              <a href='{{ route('courses.edit',$item) }}' class="btn btn-info">Edit</a>
                              <a href='' class="btn btn-success">View</a>
                              @if($item->status) 
                                <a href='{{route('admin.manage.course.disable', $item->id)}}' class="btn btn-outline-danger">Disabled</a>
                              @else
                                <a href='{{route('admin.manage.course.enable',$item->id)}}'  class='btn btn-outline-success'>Enabled</a>
                              @endif
                              

                          </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
@endsection
