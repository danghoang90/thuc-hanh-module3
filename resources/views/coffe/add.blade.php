@extends('core.app')
@section('title','Danh sách ')
@section('content')
    <div class="card-header">
        <h3 class="card-title">Thêm mới sách</h3>
    </div>
    <div class="card-body">
        <form action="{{route('coffe.store')}}" method="post">
            @csrf
            <div class="form-group">

        <lable>Tên</lable><strong class="text-danger">*</strong>
        <input type="text" value="{{ old('name') }}"
               class="form-control @error('name') is-invalid  @enderror" name="name">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <lable>Mô tả</lable><strong class="text-danger">*</strong>
        <input type="text" value="{{ old('desc') }}"
               class="form-control @error('desc') is-invalid  @enderror" name="desc">
        @error('desc')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh</label>
        <strong class="text-danger">*</strong>
        <input type="file" name="image" class="form-control-file">
    </div>

    <div class="form-group">
        <label>Trạng thái</label>
        <strong class="text-danger">*</strong>
        <input type="text" value="{{ old('status') }}"
               class="form-control @error('status') is-invalid  @enderror" name="status">
        @error('status')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label>Giá bán</label>
        <strong class="text-danger">*</strong>
        <input type="text" value="{{ old('price') }}"
               class="form-control @error('price') is-invalid  @enderror" name="price">
        @error('price')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
            <div class="form-group">
                <label>Thể loại</label>
                <strong class="text-danger">*</strong>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>


                <button type="submit" class="btn btn-primary">Lưu</button>
                <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
    </form>
@endsection
