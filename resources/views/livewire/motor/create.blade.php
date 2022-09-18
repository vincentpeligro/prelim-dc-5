<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Motor</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Motor Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='price'>
             <label for="price">price</label>
             @error('price')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="model" class="form-select" wire:model.defer='model'>
             <option hidden="true">Select model</option>
             <option selected disabled>Select model</option>
             <option value="Kawasaki">Kawasaki</option>
             <option value="Honda">Honda</option>
             <option value="Zuzuki">Zuzuki</option>
             <option value="Yamaha">Yamaha</option>
            </select>
         </div>
          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addHero()'>
                 Add Hero
             </button>
          </div>
     </div>
    </div>
 </div>
