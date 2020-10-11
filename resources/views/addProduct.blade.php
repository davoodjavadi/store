<!DOCTYPE html>
<html>
<head>
    <title>add product</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>

<header>
        <h2 class="panel-heading" align="center">ADD PRODUCT </h2>
    </header>
<hr style="border: 2px solid cadetblue;">

    <div class="col-md-3"></div>
<div align="center">
    <div class="col-md-6">
    <form role="form" method="post" action="{{ url('addProduct/store') }}" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
        <div class="box-body">
            <div class="form-group">
                <label for="">نام محصول : </label>
                <input type="text" name="name" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for=""> قیمت : </label>
                <input type="text" name="price" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="image">تصویر محصول:</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="jpg , png , gif , jpeg , >2MB">
            </div>
        <div class="form-group">
            <label> دسته محصول : </label>
            <select class="form-control" name="category_id">
                <option value="null">دسته محصول را انتخاب کنید </option>
                @foreach($cat as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
                 </select>
        </div>
        <div class="form-group">
            <label> وضعیت محصول : </label>
            <select class="form-control" name="status">
                <option value="null">-- انتخاب کن --</option>
                <option value="active">فعال</option>
                <option value="inactive">غیرفعال</option>
            </select>
        </div>
            <div class="form-group">
                <label for=""> کد تخفیف : </label>
                <select class="form-control" name="discount">
                    <option value="null">در صورت تمایل انتخاب کن</option>
                    @foreach($dis as $d)
                        <option value="{{ $d->name }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
        <!-- textarea -->
        <div class="form-group">
            <label> توضیحات محصول : </label>
            <textarea name="detail" class="form-control" rows="3" placeholder=""></textarea>
        </div>

        <div class="box-footer">
            <a href="{{ url('user/profile') }}" class="btn btn-info btn-lg">بازگشت</a>
            <button type="submit" class="btn btn-primary btn-lg ml-2"> ثـبـت </button>
        </div>
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>