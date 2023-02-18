<div class="container px-4 ">
    <div class="d-flex  text-white"  >
        <div class="text-center py-2 mx-auto">
            <p class="text-uppercase text-secondary my-0"><strong>{{$datos['mesesp']}} {{$datos['ano']}}</strong></p>
        </div>
    </div>
    <table width="100%" class="mb-0" >
        <tr class="border-bottom border-top border-secondary" style="">
            <th class="py-1 text-secondary" style="text-align: center">L</th>
            <th class="py-1 text-secondary" style="text-align: center">M</th>
            <th class="py-1 text-secondary" style="text-align: center">X</th>
            <th class="py-1 text-secondary" style="text-align: center">J</th>
            <th class="py-1 text-secondary" style="text-align: center">V</th>
            <th class="py-1 text-secondary" style="text-align: center">S</th>
            <th class="py-1 text-secondary" style="text-align: center">D</th>
        </tr>
        @foreach ($calendario as $dia)
            @if ($loop->first)
                <tr>
                @for ($i = 0; $i < $datos['primernumerodiames']-1; $i++)
                <td class="text-secondary" style="text-align: center"></td>
                @endfor
                <td class="text-secondary kxp {{$dia->formato}} " style="text-align: center"><a class="{{$dia->formato}}" href="{{route('agenda.indexday',$dia->fecha)}}">{{$dia->dia}}</a></td>
            @elseif ($loop->last)
                <td class="text-secondary kxp {{$dia->formato}} " style="text-align: center"><a class="{{$dia->formato}}" href="{{route('agenda.indexday',$dia->fecha)}}">{{$dia->dia}}</a></td>
                @for ($i = 0; $i < 7-$dia->diasemana; $i++)
                    <td class="text-secondary" style="text-align: center"></td>
                @endfor
                </tr>
            @else
                @if ($dia->diasemana === 1)
                    </tr><tr><td class="text-secondary kxp {{$dia->formato}} " style="text-align: center"><a class="{{$dia->formato}}" href="{{route('agenda.indexday',$dia->fecha)}}">{{$dia->dia}}</a></td>
                @elseif ($dia->diasemana === 7)
                    <td  class="text-secondary kxp {{$dia->formato}} " style="text-align: center"><a class="{{$dia->formato}}" href="{{route('agenda.indexday',$dia->fecha)}}">{{$dia->dia}}</a></td></tr>
                @elseif ($dia->diasemana > 1 and $dia->diasemana < 7)
                    <td class="text-secondary kxp {{$dia->formato}}" style="text-align: center"><a class="{{$dia->formato}} " href="{{route('agenda.indexday',$dia->fecha)}}">{{$dia->dia}}</a></td>
                @endif
            @endif
        @endforeach
    </table>
</div>
