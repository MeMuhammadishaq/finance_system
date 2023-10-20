@extends('main')
@section('containt')
    <div class="container">
    <div class="row">
        <div class="col-md-6"><h2>total credit</h2>
        <input type="text"name="" value="{{$totalCredit}}" @readonly(true)>
        </div>
        <div class="col-md-6"><h2>total debit</h2>
        <input type="text" name=""value="{{$totalDebit}}" @readonly(true)>
        </div>
    </div>
    <hr>
    <div class="row">
            <table border="1"class="table table-primary">
            @foreach($read as  $item)
             <tr>
               <td colspan="4">
            <a href="{{route('add_data',['id'=>$item->id,'name'=>$item->name])}}">
                 
            {{$item->name}}
        </a>
         </td>
        
               
             </tr>
        @endforeach
            </table>
    </div>

    </div>


















    </div>
@endsection

