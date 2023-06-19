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
                <form wire:submit.prevent="Update()" autocomplete="off">
                    <div class="mb-3">
                        <div class="form-label">Select</div>
                        <select class="form-select" wire:model="project">
                            <option value="Hotel">Hotel</option>
                            <option value="House">House</option>
                            <option value="Cafe">Cafe</option>
                            <option value="Building">Building</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Airport">Airport</option>
                        </select>
                        @error('project')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" wire:model="projectname" class="form-control"
                            placeholder="Input placeholder">
                        @error('projectname')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" wire:model="location" class="form-control"
                            placeholder="Input placeholder">
                        @error('location')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="start">Start date:</label>

                        <input type="date" id="start" name="trip-start"wire:model="startingdate"
                            value="2060-07-22" min="2020-01-01" max="2050-12-31">
                        @error('startingdate')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="start">Dealine date:</label>

                        <input type="date" id="start" name="trip-start"wire:model="deadlinedate"
                            value="2060-07-22" min="2020-01-01" max="2050-12-31">
                        @error('deadlinedate')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

</div>
