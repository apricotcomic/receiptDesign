@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stamp Image Upload</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--成功時のメッセージ--}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    {{--フラッシュメッセージ--}}
                    @if (session('flash_message'))
                        <div class="flash_message">
                            {{ session('flash_message')}}
                        </div>
                    @endif

                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="filename" class="col-md-4 col-form-label text-md-right">{{ __('FileName') }}</label>

                            <div class="col-md-8">
                                <input id="filename" class="input-group-text text-md-left" type="file" name="filename" value="{{ old('filename', $company->stamp_image) }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name='action' value='upload'>
                                    {{ __('登録') }}
                                </button>
                                <button type="button" class="btn btn-primary" onclick="history.back()">
                                    {{ __('戻る') }}
                                </button>
                            </div>
                        </div>

                        <div class="table-resopnsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{__('CHK')}}</th>
                                        <th>{{__('File Name')}}</th>
                                        <th>{{__('Image')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($stamps))
                                        @foreach ($stamps as $stamp)
                                            <tr>
                                                @if($company->stamp_image = $stamp)
                                                    <td>{{Form::radio('select','', true)}}</td>
                                                @else
                                                    <td>{{Form::radio('select')}}</td>
                                                @endif
                                                <td>{{ $stamp }}</td>
                                                <td><img src="storage/stamps/{{$company->company_id}}/{{ $stamp }}" width=50 height=50></td>
                                                <td><button type="submit" class="btn btn-primary" name='action' value='delete'>
                                                    {{ __('削除') }}
                                                </button></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
