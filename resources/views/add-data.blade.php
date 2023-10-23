@extends('main')
@section('containt')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-8">
                <input type="text"value="{{$name}}" @readonly(true)>
            </div>
            <div class="col-md-4">
                <label for="input">Total Amount
                    <input type="text" name=""value="{{$total}}"@readonly(true)></label>
            </div>
        </div>
        <br><br>
        <div class="table-responsive">
            <table class="table table-primary">
                <tbody>
                 
                    @foreach ($data as $item)
                         
                        <tr class="">
                            <td scope="row">{{$item->peyment_type}}</td>
                            <td>{{$item->amount}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="">
            <br>
            <form action="{{ route('insert_data') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-8">
                        <label for="" class="form-label">enter amount</label>
                        <input type="text" class="form-control" name="amount" id="" aria-describedby="helpId"
                            placeholder="">
                        <input type="hidden" name="costomer_id" value="{{ $id }}">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">peyment type</label>
                        <select class="form-select form-select" name="peyment_type" id="">
                            <option selected value="Credit">Credit</option>
                            <option value="Debit">Debit</option>

                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
















    </div>
@endsection
