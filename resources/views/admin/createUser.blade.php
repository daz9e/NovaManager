
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Number of Users</th>
            <th scope="col">INN</th>
            <th scope="col"></th>
        </tr>
        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
        @foreach($organisations as $organisation)
            <tr>
                <td>
                    <div class="media">
                        <div class="media-body align-self-center">
                            <h6 class="mb-0">{{ $organisation->name }}</h6>
                        </div>
                    </div>
                </td>
                <td>{{ $organisation->members }}</td>
                <td>{{ $organisation->inn }}</td>
                <td class="text-center">
                    <div class="action-btns">
                        {{--<a href="{{ route('organisations.show', $organisation->id) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                            View
                        </a>
                        <a href="{{ route('organisations.edit', $organisation->id) }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            Edit
                        </a>--}}
                        <a href="{{ route('organisations.destroy', $organisation->id) }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            Delete
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
<div class="text-center mt-3">
    <a href="{{ route('organisations.create') }}"  class="btn btn-outline-primary mb-2 me-4">Create Organisation</a>
</div>
