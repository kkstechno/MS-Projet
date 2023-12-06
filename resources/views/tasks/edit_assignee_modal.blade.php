<div id="EditAssigneeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Editer') }}&nbsp;{{ __('assignation') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="editValidationErrorsBox"></div>
                <div class="row">
                    <input type="text" hidden id="hdnTaskId">
                    <div class="form-group col-sm-12">
                        {{ Form::label('assign_to', __('Assigné à').':') }}
                        {{ Form::select('assignees[]',$users, $assignees, ['class' => 'form-control','id'=>'editAssigneeField', 'multiple' => true]) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Enregistrer'), ['type' => 'button', 'class' => 'btn btn-primary ml-1', 'id' => 'btnSaveAssignees', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Validation..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
