@extends('layouts.index')

@section('title','Create Post')

@section('content')
    <div class="container lg:ml-40" >
        <h5 class="font-semibold text-xl tracking-wide" >Creat Post</h5>

        <div class="md:w-[600px]" >
            <form action="{{ route('posts.store') }}" method="POST" >
                @csrf
                @method('post')

                <div class="my-3" >
                    <label for="title" class="block select-none my-1" >Title</label>
                    <input type="text" name="title" id="title" class="w-full rounded-md p-2" placeholder="Enter Title" value="{{old('title')}}" />
                </div>

                <div class="my-3" >
                    <textarea id="summernote" name="content" >{{old('content')}}</textarea>
                </div>

                <div class="flex justify-end items-center my-3" >
                    <a href="{{ route('dashboard') }}" class="bg-gray-500 text-white rounded-md p-2 mx-1" >Cancel</a>
                    <button type="submit" class="cursor-pointer bg-blue-500 text-white rounded-md p-2 mx-1" >Post</button>
                </div>

            </form>
        </div>

    </div>
@endsection

@section('script')

<script type="text/javascript" >
    
    $(document).ready(function() {  


        $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture']],
          ['view', ['help']]
        ]
      });

    });

    

</script>

@endsection