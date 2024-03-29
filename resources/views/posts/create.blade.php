@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header"><?php echo isset($post)? 'Edit Post' : 'New Post'?></div>

                <div class="card-body">
                  @if($errors->any())
                  <div class="alert alert-danger">
                    <ul class="list-group">
                      @foreach($errors->all() as $error)
                      <li class="list-group-item">{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                   <form action="{{isset($post)?   route('post.update',['id'=>$post->id])  :  route('post.store') }} " method="post" enctype="multipart/form-data">
                  @csrf

                  @if(isset($post))
                    @method('PUT')
                  @endif

                  
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{isset($post)? $post->title:''}}">
                  </div>
                  
                  
                  <div class="form-group">
                      <label>Content</label>
                      <textarea name="content" id="" cols="30" rows="10" class="form-control">{{isset($post)? $post->title:''}}
                      </textarea>
                    </div>
                   
                   
                    <div class="form-group">
                    <label>Featured Image</label>
                    <input type="file" name="featured_img" class="form-control-file">
                  </div>
                    <div class="form-group">
                      <label>Select a category</label>
                      <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div class="form-group">
                    <label>Select tags</label>
                    @foreach($tags as $tag)
                    <div class="checkbox">
                      <label><input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->name}}</label>
                    </div>
                    @endforeach
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">{{isset($post)? 'Update Post':'Store Post'}}</button>
              
                  
                  </div>
                     
                </div>
            </div>
        
@endsection
