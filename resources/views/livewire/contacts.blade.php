<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form>
        <div class=" add-input">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name.0">
                        @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="phone" class="form-control" wire:model="phone.0" placeholder="Enter Phone">
                        @error('phone.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                </div>
            </div>
        </div>
  
        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" wire:model="name.{{ $value }}">
                            @error('name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="phone.{{ $value }}" placeholder="Enter phone">
                            @error('phone.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
                    </div>
                </div>
            </div>
        @endforeach
  
        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
  
    </form>

    
        @php
            dump($name);
        @endphp
      
        @foreach($name as $key => $value)
            <p>{{$value}}</p>
            <p>tes</p>
        @endforeach
    
</div>
