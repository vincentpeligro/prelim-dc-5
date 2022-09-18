<div>
    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Are you sure to delete it?</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>
                        Name:
                    </th>
                    <td>
                        {{ $this->hero->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Type:
                    </th>
                    <td>
                        {{ $this->hero->type }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Damage:
                    </th>
                    <td>
                        {{ $this->hero->damage }}
                    </td>
                </tr>

            </table>
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
