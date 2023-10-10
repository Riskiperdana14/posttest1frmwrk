@extends('layouts.base')

@section('content')
ini halaman series

<h2>Series</h2>
<div class="series-grid">
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    <div class="series-card">
        <h3>One Piece</h3>
        <img src="https://image.tmdb.org/t/p/w500//fcXdJlbSdUEeMSJFsXKsznGwwok.jpg" alt="One Piece">
        <p>Petualangan epik Monkey D. Luffy dan krunya dalam pencarian harta karun legendaris. Mereka menjelajahi Grand Line, menghadapi musuh kuat, dan mengungkap misteri.</p>
    </div>
    
</div>

<div class="container">
    <h2>Form Komentar</h2>
    <form action="/submit_comment" method="post">
        @csrf  
        <label for="comment">Komentar (maksimal 200 kata):</label><br>
        <textarea id="comment" name='komentar' maxlength="200" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</div>


@endsection
