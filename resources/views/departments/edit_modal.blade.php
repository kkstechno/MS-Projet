<div id="EditModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Modifier le département') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id' => 'editForm', 'files' => true]) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="editValidationErrorsBox"></div>
                {{ Form::hidden('department_id', null, ['id' => 'departmentId']) }}
                <div class="row">
                    <div class="form-group col-sm-9">
                        {{ Form::label('name', __('Nom')) }}<span class="required">*</span>
                        {{ Form::text('name', '', ['id' => 'edit_name', 'class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group col-sm-3">
                        {{ Form::label('color', __('Couleur')) }}
                        <div class="color-wrapper"></div>
                        {{ Form::text('color', '', ['id' => 'edit_color', 'hidden', 'class' => 'form-control color']) }}
                    </div>
                    <div class="form-group d-flex flex-column col-sm-12">
                        {{ Form::label('description', __('Description').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editDescription']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Valider'), ['type' => 'submit', 'class' => 'btn btn-success', 'id' => 'btnEditSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Mise à jour"]) }}
                    <button type="button" id="btnCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
