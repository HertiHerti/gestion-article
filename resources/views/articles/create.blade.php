@extends('layouts.default',['title'=>'Creer un evenement'])
@section('content')
<h1>Creer un evenement</h1>
{!!Form::open(['url'=>route('article.store')])!!}
<div class="form-group">
    {!!Form::label('titre', 'Titre :')!!}
     {!!Form::text('titre',null, ['class'=>'form-control'])!!}
         {!!Form::label('content', 'Le contenu :')!!}
      {!!Form::textarea('content',null,['class'=>'form-control'])!!}
      <input type="submit" value="Creer" class="btn btn-primary ">
</div>

{{Form::close()}}

@stop
