@extends("layouts.dashboard")

@section("title")
    Laravel Auth | Project Create
@endsection

@section("content")

    <h1>Create a new project</h1>

    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="project-title" class="form-label">Title</label>
          <input type="text"
            class="form-control" name="title" id="project-title" aria-describedby="helpId" placeholder="Insert title project">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="project-content" rows="3" placeholder="Insert content project"></textarea>
        </div>

        <!-- <div class="m-3">
          <label for="project-title" class="form-label">Slug</label>
          <input type="text"
            class="form-control" name="slug" id="project-title" aria-describedby="helpId" placeholder="Insert slug">
        </div> -->

        <div class="mb-3">
          <label for="project-cover-image" class="form-label">Cover Image</label>
          <input type="file" class="form-control" name="cover_image" id="project-cover-image" placeholder="" aria-describedby="fileHelpId">
        </div>

        <div class="mb-3">
          <label for="project-types" class="form-label">Types</label>
          <select class="form-select form-select-lg" name="type_id" id="project-types">
            <option value=""> Seleziona type </option>
            @foreach ($types as $elem)
              <option value="{{$elem->id}}">{{ $elem->name }}</option>  
            @endforeach
          </select>
          <div>
            @error ("type_id")
              <div class="alert alert-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>


        <button class="btn btn-success">Create project</button>

    </form>


@endsection