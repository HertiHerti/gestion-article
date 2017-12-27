@extends('layouts.default',['title'=>'Acceuil'])


@section('content')
<h1 class="lead">Liste de tous les evenement</h1>
@forelse($articles as $article)
<ul>
    <li>

 <a href="{{route('article.show',$article)}}">{{ $article->titre}}</a></h4>
    </li>
</ul>

@empty
<p>Aucun articles pour le moment...</p>
@endforelse
@stop

@section('sidebar')
<p>Je suis la side bar</p>
@stop
