<div>

<div class = "row">
    <div class = "mx-auto col-md-4">
        <img class= "mx-auto d-block" style="width: 140px;height:140;"
        src="{{Storage::disk('public')->url('images/otros/login.png')}}" alt="">
        <form wire:submit.prevent="login">
            <div class="form-group">
              <label class="form-label">Correo Electronico</label>
              <input wire:model="email" type="email" class="form-control" placeholder="ejemplo@gmailcom">
              @error('email')<b class="text-dander">{{$message}}</b> @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Password</label>
            <input wire:model="password" type="password" placeholder="************************" class="form-control">
            @error('password')<b class="text-dander">{{$message}}</b> @enderror
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input">
              <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
          </form>
    </div>
</div>
</div>
