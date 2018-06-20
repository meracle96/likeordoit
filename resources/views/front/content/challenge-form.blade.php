@extends('front.partials.layout')
@section('title')
Add Challenge
@endsection

@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="section-overlay">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Add Challenge</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li> - </li>
                        <li><a href="/challenge">Challenge</a></li>
                        <li> - </li>
                        <li>Add Challenge</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row page-addlisting">
    <div class="container">
        <div class="add-filter">
            <div class="row">
                <div class="col-lg-2">
                    <h5 class="title-list">Challenge Information</h5>
                </div>
                <div class="col-lg-10 widget-form">
                    <form method="post" action="{{ route('challenge.store') }}" class="filter-form form-addlist" enctype="multipart/form-data">
                      @csrf
                        <p class="input-info">
                            <label class="nhan">Challenge Title*</label>
                            <input style="color:black;" type="text" name="title" id="title" required placeholder="Your Challenge Title ...">
                        </p>
                        <p class="input-info">
                            <label class="nhan">Challenge Description*</label>
                            <textarea style="color:black;" name="desc" required placeholder="Your Challenge Description ..."></textarea>
                        </p>
                        <p class="input-info icon">
                            <label class="nhan">Challenge Difficulty*</label>
                            <select class="dropdown_sort" name="difficulty" required style="color:black;">
                                <option value="Very Easy" style="color:black;">Very Easy</option>
                                <option value="Easy" style="color:black;">Easy</option>
                                <option value="Normal" style="color:black;">Normal</option>
                                <option value="Hard" style="color:black;">Hard</option>
                                <option value="Very Hard" style="color:black;">Very Hard</option>
                            </select>
                            <i class="fa fa-angle-down"></i>
                        </p>
                        <p class="input-info icon">
                            <label class="nhan">How To Prove It*</label>
                            <select class="dropdown_sort" name="id_type" required style="color:black;">
                                @foreach($types as $type)
                                <option value="{{ $type->id }}" style="color:black;">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <i class="fa fa-angle-down"></i>
                        </p>
                        <p class="input-info">
                            <label class="nhan">Photo</label>
                            <br>
                            <input type="file" name="photo">
                        </p>
                        <br>
                        <div class="button-addlist float-right">
                            <button type="submit" name="submit" class="flat-button">Submit Challenge</button>
                         </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
