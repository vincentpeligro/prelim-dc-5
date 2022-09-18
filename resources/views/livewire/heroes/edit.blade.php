<div>
    <div class="card container w-50">
     <div class="card-header bg-info">
         <h3>Edit Hero Detail</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Hero Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='damage'>
             <label for="damage">Damage</label>
             @error('damage')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="type" class="form-select" wire:model.defer='type'>
             <option hidden="true">Select type</option>
             <option selected disabled>Select type</option>
             <option value="Mage">Mage</option>
             <option value="Strength">Strength</option>
             <option value="Intellegence">Intellegence</option>
             <option value="Agility">Agility</option>
            </select>
         </div>


          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='editHero()'>
                Update Hero
             </button>
          </div>
     </div>
    </div>
 </div>
