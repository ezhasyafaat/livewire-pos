<div class="modal fade" id="modal-create-product" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">{{ __('Add New Product') }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action=""  enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="code">{{ __('Code Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="code" id="code" placeholder="Enter code product....">
                            </div>
                            <div class="col-md-6">
                                <label for="name">{{ __('Name Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="Enter name product....">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="code">{{ __('Category Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="category" id="category" placeholder="Enter category product....">
                            </div>
                            <div class="col-md-6">
                                <label for="name">{{ __('Stock Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="stock" id="stock" placeholder="Enter stock product....">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="code">{{ __('Unit Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="unit" id="unit" placeholder="Enter unit product....">
                            </div>
                            <div class="col-md-6">
                                <label for="name">{{ __('Supplier Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="supplier" id="supplier" placeholder="Enter supplier product....">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="code">{{ __('Inprice Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="inprice" id="inprice" placeholder="Enter inprice product....">
                            </div>
                            <div class="col-md-6">
                                <label for="name">{{ __('Outprice Product') }}</label>
                                <input type="text" class="form-control" wire:model.defer="outprice" id="outprice" placeholder="Enter outprice product....">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description Product') }}</label>
                            <textarea wire:model.defer="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">{{ __('Image Product') }}</label>
                            <input type="file" class="form-control" id="photo" wire:model.defer="photo">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-alt-success" data-dismiss="modal">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>