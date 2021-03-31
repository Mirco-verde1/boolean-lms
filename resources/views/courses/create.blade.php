@extends('base')

@section('title', 'course-create')

@section('create-course-content')
<form action="{{route('courses.store')}}" method="post">

    @csrf
    @method('POST')
    <div class="form-group">
      <label for="name">Course Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course name" name="name">

    </div>
    <div class="form-group">
      <label for="hours">Course Hours</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Hours" name="hours">
    </div>

    <div class="form-group">
        <label for="categories[]">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2" name="categories[]">
            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach


        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
