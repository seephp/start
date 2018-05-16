@extends('layouts.app')

@section('content')

     <h1>Edit: {!! $article->title !!}</h1>

     {{--Вписали все эти сложные штуки в форм дабы появился текст для редактирования --}}

     {!! Form::model($article, ['method' =>'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

     @include('articles.form', ['submitButtonText' => 'Update Article'])

     {!! Form::close() !!}

    @include('errors.list')

@endsection