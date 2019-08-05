@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Create Post
        </div>

        <div class="card-body">
            <form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description"> Description </label>
                    <textarea cols="5" rows="5" class="form-control" id="description" name="description"> </textarea>
                </div>

                <div class="form-group">
                    <label for="content"> Content </label>
                    <input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="pubished_at"> Pubished At </label>
                    <input type="text" class="form-control" id="pubished_at" name="pubished_at">
                </div>

                <div class="form-group">
                    <label for="image"> Image </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
    flatpickr('#pubished_at', {
      enableTime: true,
      enableSeconds: true
    })
    // $(document).ready(function() {
    //   $('.tags-selector').select2();
    // })
  </script>
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
