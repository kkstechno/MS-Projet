<div id="addTaskModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Nouvelle tâche') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'addTaskNewForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="projectTaskValidationErrorsBox"></div>
                <div class="row">
                    <input hidden name="project_id" id="taskProjectId">
                    <div class="form-group col-sm-6">
                        {{ Form::label('title', __('Titre')) }}<span class="required">*</span>
                        {{ Form::text('title', null, ['id'=>'title','class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('taskPriority', __('Priorité')) }}
                        {{ Form::select('priority',$priority, null, ['class' => 'form-control','id'=>'taskPriority','placeholder'=>'Choisir priorité']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 task-assignees">
                        {{ Form::label('assign_to', __('Assigné à')) }}
                        {{ Form::select('assignees[]',[], null, ['class' => 'form-control','id'=>'taskAssignee', 'multiple' => true]) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('due_date',__('Date d\'échéance')) }}
                        {{ Form::text('due_date', null, ['id'=>'taskDueDate','class' => 'form-control', 'autocomplete' => 'off']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('estimate_time', 'Temps estimé') }}
                        <div class="input-group">
                            {{ Form::text('estimate_time_hours', null, ['id'=>'taskEstimateTimeHours','class' => 'form-control', 'autocomplete' => 'off']) }}
                            {{ Form::number('estimate_time_days', null, ['id' => 'taskEstimateTimeDays', 'class' => 'form-control estimateTime', 'autocomplete' => 'off','min' => 0,'max' => 30]) }}
                            <div class="input-group-append">
                                <input type="hidden" name="estimate_time_type" value="0" id="taskTypes">
                                <button name="type" type="button" class="input-group-text btn"
                                        id="taskDays">{{__('Jours')}}</button>
                                <button name="type" type="button" class="input-group-text btn btn-primary text-white"
                                        id="taskHours" value="1">{{__('Heures')}}</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 task-tags">
                        {{ Form::label('tags', __('Mots-clés')) }}
                        {{ Form::select('tags[]',$tags, null, ['class' => 'form-control','id'=>'taskTagIds', 'multiple' => true]) }}
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group col-sm-6 p-0">
                        {{ Form::label('attachments', __('Fichiers Joints')) }}
                    </div>
                    <div>
                        <label href="#"
                               class="cursor-pointer font-size-12px btn btn-sm btn-primary mb-0 ml-2 choose-button"><i
                                    class="fas fa-plus font-size-12px"></i>&nbsp;{{__('Charger fichier')}}
                            <input type="file" name="files[]" id="Add_attachment" class="d-none" multiple>
                        </label>
                        <button type="submit" class="btn btn-sm btn-primary ml-2 btn-upload"
                                data-loading-text="<span class='spinner-border spinner-border-sm'></span> Télécharger...">
                            <i class="fas fa-upload font-size-12px"></i>&nbsp;{{__('Téléchager')}}</button>
                    </div>
                </div>
                <div class="previewImage row edit-task-attachment" id="previewImage">
                </div>
                <div class="x-content p-2 attachments-content" id="card-attachments-container">
                    <div class="text-center" id="notFoundYet"></div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('description', __('Description')) }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'taskDescription']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Enregistrer'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnTaskSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Validation..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
