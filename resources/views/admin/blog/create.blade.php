{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ブログの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div>
                <h2>ブログ新規作成</h2>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="post-area" style="text-align: center;">
        <textarea class="create-textarea"  rows="25" cols="157"></textarea>
        <div style="text-align: center;">
          <button type="button" class="col-md-2">投稿する</button>
        </div>  
      </div>
    </div>
    
@endsection