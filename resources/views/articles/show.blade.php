@extends('layouts.default',['title'=>'Voir l\'article'])
@section('content')

<h1>{{$article->titre}}</h1>
<p>slug: {{$article->slug}}</p>
<p>Contenu: {{$article->content}}</p>
<p>Online: {{ $article->online == 0 ? 'Pas encore En ligne':'Deja en ligne' }}</p>
<a href="{{route('article.edit',$article)}}" class=" btn btn-success">Editer</a>
{!!Form::open(['method'=>'delete' ,'url'=>route('article.destroy',$article)])!!}
<div class="form-group">
    <input type="submit" value="supprimer" class="btn btn-primary ">
</div>

{{Form::close()}}

@stop
