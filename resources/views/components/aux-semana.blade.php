<div class="container px-4 ">
    <div class="d-flex  text-white"  >
        <div class="text-center py-2 mx-auto">
            <p class="text-uppercase text-secondary my-0"><strong>{{$datos['mesesp']}} {{$datos['ano']}}</strong></p>
        </div>
    </div>
    <table width="100%" class="mb-0" >
        <tr class="border-bottom border-top border-secondary" style="">
            @foreach ($calendario as $semana)
            <td class="text-secondary kxp {{$semana->formato}} " style="text-align: center"><a class="{{$semana->formato}}" href="{{route('agenda.indexday',$semana->semana)}}">{{$semana->semana}}</a></td>
        @endforeach
        </tr>
    </table>
</div>
