@extends('layouts.default',['title'=>'Edition'])
@section('content')
<h1>Editer un evènement</h1>
{!!Form::open(['method'=>'put','url'=>route('article.update',$article)])!!}
<div class="form-group">
    {!!Form::label('titre', 'Titre :')!!}
     {!!Form::text('titre', $article->titre,['class'=>'form-control'])!!}
     {!!Form::label('content', 'Le contenu :')!!}
      {!!Form::textarea('content', $article->content,['class'=>'form-control'])!!}
      <label for="online">
          {!!Form::checkbox('online',1 , $article->online == 0 ? '':'checked' ) !!}
          Online
      </label>
      <input type="submit" value="editer" class="btn btn-primary ">
</div>

{{Form::close()}}
@stop
