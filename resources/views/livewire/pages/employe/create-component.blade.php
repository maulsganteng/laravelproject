<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit="create">
                <div class="mb-3">
                    <label class="form-label">Fisrt name</label>
                    <input type="text" wire:model="fisrtname" class="form-control" name="example-text-input"
                        placeholder="Input placeholder">
                </div>
                <div class="mb-3">
                    <label class="form-label">Middle name</label>
                    <input type="text" wire:model="middlename" class="form-control" name="example-text-input"
                        placeholder="Input placeholder">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last name</label>
                    <input type="text" wire:model="lastname"class="form-control" name="example-text-input"
                        placeholder="Input placeholder">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
