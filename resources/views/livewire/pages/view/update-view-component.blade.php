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
                        <select class="form-select" wire:model="name">
                            <option value="Hotel">floor</option>
                            <option value="House">wall</option>
                            <option value="Cafe">roof</option>
                            <option value="Building">pole</option>
                        </select>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">progres</label>
                        <input type="text" wire:model="progres" class="form-control"
                            placeholder="Input placeholder">
                        @error('progres')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="start">Date Update:</label>

                        <input type="date" id="start" name="trip-start"wire:model="dateupdate"
                            value="2060-07-22" min="2020-01-01" max="2050-12-31">
                        @error('dateupdate')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

</div>
