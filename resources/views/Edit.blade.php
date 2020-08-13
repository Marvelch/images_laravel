@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Ubah Data Bank</div>

            <div class="card-body">
                <form action="/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @foreach($bank as $result)
                        <div class="col-md-6">
                            <div class="form-gr oup">
                                <label for=""><b>Nama Bank</b></label>
                                <input type="text" name="bank_name" class="form-control" value="{{$result->bank_name}}">  
                                <span class="text-danger">{{ $errors->first('bank_name') }}</span>
                            </div>
                            <div class="form-group">
                            <label for=""><b>Logo</b></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="logo" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Contact Email</b></label>
                                <input type="email" name="contact_email"class="form-control" value="{{$result->contact_email}}" autocomplete="false" disabled>
                                <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                  
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://www.bookmarks.design/media/image/humaaans.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
