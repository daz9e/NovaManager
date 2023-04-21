@extends('main')

@section('title')
    Create organisation
@endsection

@section('content')
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Создать организацию</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ route('organisations.create') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Название</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="ИТ-НОВА">
                    </div>
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput2">ИНН</label>
                        <input type="text" name="inn" class="form-control" id="formGroupExampleInput2" placeholder="12345678">
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>

        </div>
    </div>
@endsection
