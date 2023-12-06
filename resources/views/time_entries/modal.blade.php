<div id="timeEntryAddModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Nouvelle entrée de temps') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'timeEntryAddForm', 'class'=>'timeEntryAddForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="tmAddValidationErrorsBox"></div>
                @if(Auth::user()->can('manage_time_entries'))
                <div class="row">
                        <div class="form-group col-sm-12">
                            {{ Form::label('User', __('Assignation')) }}<span
                                    class="required">*</span>
                            {{ Form::select('user_id', [], null, ['id' => 'timeUserId', 'class' => 'form-control', 'required', 'placeholder' => 'Select User']) }}
                        </div>
                </div>
                @else
                    <input type="hidden" name="user_id" value="{{ getLoggedInUserId() }}">
                @endif
                <div class="row">
                    <div class="form-group col-sm-4">
                        {{ Form::label('project', __('Projet')) }}<span
                                class="required">*</span>
                        {{ Form::select('project_id', $projects, null, ['id'=>'timeProjectId','class' => 'form-control','required', 'placeholder'=>'Select Project']) }}
                    </div>
                    <div class="form-group col-sm-8">
                        {{ Form::label('task', __('Tâches')) }}<span class="required">*</span>
                        {{ Form::select('task_id', [], null, ['id'=>'taskId','class' => 'form-control','required', 'placeholder'=>'Select Task']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-4">
                        {{ Form::label('start_time', __('Date de début')) }}<span
                                class="required">*</span>
                        <div id="dvStartTime">
                            {{ Form::text('start_time', null, ['class' => 'form-control','id'=>'startTime', 'autocomplete' => 'off','required']) }}
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        {{ Form::label('Activity Type', __('Type d\'activité')) }}<span
                                class="required">*</span>
                        {{ Form::select('activity_type_id', $activityTypes, null, ['id'=>'activityTypeId','class' => 'form-control','required', 'placeholder'=>'Select Activity']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 p-0">
                        <div class="form-group col-sm-12">
                            {{ Form::label('end_time', __('Date de fin')) }}<span
                                    class="required">*</span>
                            <div id="dvEndTime">
                                {{ Form::text('end_time', null, ['class' => 'form-control','id'=>'endTime', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('duration', __('Durée')) }}
                            <div id="dvDuration">
                                {{ Form::number('duration', null, ['class' => 'form-control','id' => 'duration', 'readonly']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        {{ Form::label('note', __('Note')) }}
                        {{ Form::textarea('note', null, ['class' => 'form-control time-modal-note', 'rows' => 5]) }}
                        {{ Form::hidden('entry_type', 2) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button( __('Enregistrer'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Validation..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{  __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
