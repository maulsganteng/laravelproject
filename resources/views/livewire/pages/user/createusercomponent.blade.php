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
                        <label class="form-label">employe</label>
                        <input type="text" wire:model="employe" class="form-control" placeholder="Input placeholder">
                        @error('employe')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" wire:model="username" class="form-control"
                            placeholder="Input placeholder">
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">email</label>
                        <input type="text" wire:model="email" class="form-control" placeholder="Input placeholder">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" wire:model="password" class="form-control"
                            placeholder="Input placeholder">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

</div>
