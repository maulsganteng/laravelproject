<div>
    <div>
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="create()" autocomplete="off">
                    <div class="mb-3">
                        <div class="form-label">Select</div>
                        <select class="form-select">
                            <option value="1">Hotel</option>
                            <option value="2">House</option>
                            <option value="3">Cafe</option>
                            <option value="4">Building</option>
                        </select>
                        <input type="text" wire:model="project" class="form-control" placeholder="Input placeholder">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" wire:model="projectname" class="form-control"
                            placeholder="Input placeholder">
                        @error('middlename')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" wire:model="location" class="form-control"
                            placeholder="Input placeholder">
                        @error('lastname')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Starting Date</label>
                        <input type="text" name="input-mask" class="form-control"wire:model="startingdate"
                            data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deadline Date</label>
                        <input type="text" name="input-mask" class="form-control"wire:model="deadlinedate"
                            data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off">
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

</div>
