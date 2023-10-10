@extends('layouts.base')

@section('content')
ini halaman movies

<h2>Film Terbaru</h2>
    <div class="movie-grid">
        <div class="movie-card">
            <h3>Talk to Me</h3>
            <img src="https://image.tmdb.org/t/p/w500//kdPMUMJzyYAc4roD52qavX0nLIC.jpg" alt="Talk to Me">
            <p>Sebuah film horor yang memperlihatkan bagaimana obsesi remaja terhadap pemanggilan roh bisa berujung mengerikan</p>
        </div>
        <div class="movie-card">
            <h3>Blue Beetle</h3>
            <img src="https://image.tmdb.org/t/p/w500//mXLOHHc1Zeuwsl4xYKjKh2280oL.jpg" alt="Blue Beetle">
            <p>Petualangan Jaime Reyes, seorang lulusan baru yang dipilih oleh alien Scarab untuk menjadi tuan rumah simbiosis, mengubah takdirnya selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Fast X</h3>
            <img src="https://image.tmdb.org/t/p/w500//fiVW06jE7z9YnO4trhaMEdclSiC.jpg" alt="Fast X">
            <p>Dom Toretto dan keluarganya dihadapkan pada musuh paling mematikan mereka, Dante Reyes, yang mencari balas dendam atas kematian ayahnya</p>
        </div>
        <div class="movie-card">
            <h3>The Nun II</h3>
            <img src="https://image.tmdb.org/t/p/w500//5gzzkR7y3hnY8AD1wXjCnVlHba5.jpg" alt="The Nun II">
            <p>Suster Irene kembali berhadapan dengan Valak, kali ini di Prancis, dalam sekuel horor yang menegangkan ini
            </p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
        <div class="movie-card">
            <h3>Barbie</h3>
            <img src="https://image.tmdb.org/t/p/w500//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="Barbie">
            <p>Barbie dan Ken memasuki dunia nyata dalam petualangan komedi fantasi yang mengubah hidup mereka selamanya</p>
        </div>
    </div>
    <div class="container">
        <h2>Form Tamu</h2>
        <form action="/submit_guest" method="post">
            @csrf
            <label for="guest">Komentar (maksimal 200 kata):</label><br>
            <textarea id="guest" name='komentar' maxlength="200" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    

@endsection
