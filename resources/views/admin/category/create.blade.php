<title>ایجاد دسته بندی جدید</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1 style="margin-right: 17em">افزودن دسته بندی جدید</h1>
        </header>
        <div class="panel-body" style="margin-left: 6em; margin-right: 2em">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('category.store')}}">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-warning" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection