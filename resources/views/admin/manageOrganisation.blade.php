<div class="col-lg-12 col-md-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Организации</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            @if ($organisations->isEmpty())
                <p>Нет доступных организаций.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <thead>
                        <tr>
                            <th class="text-center">Название</th>
                            <th class="text-center">INN</th>
                            <th class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($organisations as $organisation)
                            <tr>
                                <td class="text-center">{{ $organisation->name }}</td>
                                <td class="text-center">{{ $organisation->inn }}</td>
                                <td class="text-center">
                                    <a href="#" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Delete" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $organisation->id }}').submit();">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $organisation->id }}" action="{{ route('organisations.destroy', $organisation->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

<div id="basic" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Input Text</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="row">
                <div class="col-lg-6 col-12 ">
                    <form method="post">
                        <div class="form-group">
                            <label for="t-text" class="visually-hidden">Text</label>
                            <input id="t-text" type="text" name="txt" placeholder="Some Text..." class="form-control" required="">
                            <input type="submit" name="txt" class="mt-4 btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
