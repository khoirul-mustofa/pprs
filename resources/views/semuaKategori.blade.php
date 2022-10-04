@foreach ($semuaKategori as $k)
<ul>
    <li>
        <h4><a href="/kategori/{{ $k->slug }}">{{ $k->name }}</a></h4>
    </li>
</ul>   
@endforeach
