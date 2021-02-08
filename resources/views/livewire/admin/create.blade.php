<div class="modal fade" id="modal-create-admin" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">{{ __('Add New Admin') }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="Enter name...." >
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" class="form-control" wire:model.defer="email" id="email" placeholder="Enter email....">
                        </div>
                        <div class="form-group">
                            <label for="role">{{ __('Role') }}</label>
                            <select class="form-control" wire:model.defer="role" id="role">
                                <option value="">Select one....</option>
                                <option value="Admin">Admin</option>
                            </select>
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