<div>
    <p>Helló</p>
    
    <table border="1">
    @foreach ($jatekosok as $jatekos)
        <tr>
            <td>{{$jatekos->nev}}</td>
            <td>{{$jatekos->poszt}}</td>
        </tr>
    @endforeach
    </table>
</div>