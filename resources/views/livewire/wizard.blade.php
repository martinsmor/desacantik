<div>
   
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif
      
    <div class="text-center">
        <!-- progressbar -->
        <ul class="progressbar">
            <li class="{{ $currentStep != 1 ? '' : 'active' }}"><a href="#step-1" type="button">Step 1</a></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a href="#step-2" type="button">Step 2</a></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a href="#step-3" type="button">Step 3</a></li>
            <li class="{{ $currentStep != 4 ? '' : 'active' }}"><a href="#step-4" type="button">Step 4</a></li>
            <li class="{{ $currentStep != 5 ? '' : 'active' }}"><a href="#step-5" type="button">Step 5</a></li>
            <li class="{{ $currentStep != 6 ? '' : 'active' }}"><a href="#step-6" type="button">Step 6</a></li>
            <li class="{{ $currentStep != 7 ? '' : 'active' }}"><a href="#step-7" type="button" disabled="disabled">Step 7</a></li>
        </ul>
    </div>
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">

                    <div class="text-center">
                       <label class="form-label w-full flex flex-col sm:flex-row">
                            <strong> I - PENGENALAN TEMPAT </strong>
                       </label>
                    </div>

                    <div class="form-group">
                        <label for="title">103 - Kecamatan</label>
                        <input type="text" wire:model="kec_id" class="form-control" id="kec_id">
                        @error('kec_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Product Amount:</label>
                        <input type="text" wire:model="amount" class="form-control" id="productAmount"/>
                        @error('amount') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description:</label>
                        <textarea type="text" wire:model="description" class="form-control" id="taskDescription">{{{ $description ?? '' }}}</textarea>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label for="description">Product Status</label><br/>
                        <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                        <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                        @error('status') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Product Stock</label>
                        <input type="text" wire:model="stock" class="form-control" id="productAmount"/>
                        @error('stock') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <table class="table">
                        <tr>
                            <td>Product Name:</td>
                            <td><strong>{{$name}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Amount:</td>
                            <td><strong>{{$amount}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product status:</td>
                            <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$description}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Stock:</td>
                            <td><strong>{{$stock}}</strong></td>
                        </tr>
                    </table>
                    <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>
    </div>