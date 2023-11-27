<div>
    <div class="col-md-8 mb-2">
        <div class="card">
            <div class="card-body">
                @include('partial.flash')

                @if($updateCategory)
                    @include('livewire.update')
                @elseif($createCategory)
                    @include('livewire.create')
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <b>Posts</b>
                <a href="javascript:void(0);" wire:click="create" class="btn btn-primary btn-sm float-end">Add New</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                    <td>
                                        {{$category->description}}
                                    </td>
                                    <td>
                                        <button wire:click="edit({{$category->id}})" class="btn btn-primary btn-sm">
                                            Edit
                                        </button>
                                        <a href="javascript:void(0);" wire:click="destroy({{$category->id}})"
                                           class="btn btn-sm btn-danger"
                                           onclick="if(confirm('Are you sure')){destroy({{$category->id}})}else return false;">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Categories Found.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
