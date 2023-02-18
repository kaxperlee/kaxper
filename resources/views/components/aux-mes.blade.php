<div class="container px-4 ">
    <div class="d-flex  text-white border-bottom border-secondary mb-2"   >
        <div class="text-center py-2 mx-auto">
            <p class="text-uppercase text-secondary my-0" ><strong>{{$datos['ano']}}</strong></p>
        </div>
    </div>
    <table width="100%" class="mb-0" >
        <tr>
            @foreach ($calendario as $mes)
                @if ($loop->last)
                <td class="col-4 text-secondary kxp {{$mes['formato']}}" style="text-align: center">
                    <a class="text-uppercase {{$mes['formato']}}" href="{{route('agenda.indexday','Jan')}}">{{$mes['nombrecorto']}}</a>
                </td>
                @else
                    @if($loop->index % 3 === 2)
                    <td class="col-4 text-secondary kxp {{$mes['formato']}}" style="text-align: center">
                        <a class="text-uppercase {{$mes['formato']}}" href="{{route('agenda.indexday','Jan')}}">{{$mes['nombrecorto']}}</a>
                    </td></tr><tr>
                    @else
                    <td class="col-4 text-secondary kxp {{$mes['formato']}}" style="text-align: center">
                        <a class="text-uppercase {{$mes['formato']}}" href="{{route('agenda.indexday','Jan')}}">{{$mes['nombrecorto']}}</a>
                    </td>
                    @endif
                @endif
            @endforeach
        </tr>
    </table>
</div>