<div id="EditModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Editer tâche') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'editForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="editValidationErrorsBox"></div>
                {{ Form::hidden('tag_id',null,['id'=>'tagId']) }}
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('title', __('Titre').':') }}<span class="required">*</span>
                        {{ Form::text('title', null, ['id'=>'editTitle','class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('project_id', __('Projet').':') }}<span
                                class="required">*</span>
                        {{ Form::select('project_id', $projects, null, ['class' => 'form-control','required', 'id' => 'editProjectId', 'placeholder'=>'Choisir projet']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('priority',  __('Priorité').':') }}
                        {{ Form::select('priority',$priority, null, ['class' => 'form-control','id'=>'editPriority','placeholder'=>'Choisir priorité ']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('status', __('Statut').':') }}
                            @if(auth()->user()->can('manage_status'))
                                <div class="input-group flex-nowrap">
                                    {{ Form::select('status',$taskStatus, null, ['class' => 'form-control','id'=>'editStatus']) }}
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                    <a href="#" class="add_modal" data-toggle="modal" data-target="#addStatusModal" title="{{ __('Ajouter statut') }}"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                </div>
                            @else
                                {{ Form::select('status',$taskStatus, null, ['class' => 'form-control','id'=>'editStatus']) }}
                            @endif
                   
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('due_date', __('Date d\'échéance').':') }}
                        {{ Form::text('due_date', null, ['id'=>'editDueDate','class' => 'form-control', 'autocomplete' => 'off']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('estimate_time', __('Temps estimé').':') }}
                        <div class="input-group">
                            {{ Form::text('estimate_time_hours', null, ['id'=>'editEstimateTimeHours','class' => 'form-control', 'autocomplete' => 'off']) }}
                            {{ Form::number('estimate_time_days', null, ['id' => 'editEstimateTimeDays', 'class' => 'form-control', 'autocomplete' => 'off','min' => 0 ,'max' => 30]) }}
                            <div class="input-group-append">
                                <input type="hidden" name="estimate_time_type" value="" id="editTypes">
                                <button name="type" type="button" class="input-group-text btn"
                                        id="editDays">{{__('Jours')}}</button>
                                <button name="type" type="button" class="input-group-text btn" id="editHours"
                                        value="1">{{__('Heures')}}</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 task-tags">
                        {{ Form::label('tags', __('Mots-clés').':') }}
                        {{ Form::select('tags[]',[], null, ['class' => 'form-control','id'=>'editTagIds', 'multiple' => true]) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 task-assignees">
                        {{ Form::label('assign_to', __('Assigné à').':') }}
                        {{ Form::select('assignees[]',[], null, ['class' => 'form-control','id'=>'editAssignee', 'multiple' => true]) }}
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group col-sm-6 task-tags">
                        {{ Form::label('tags', __('Fichiers joints').':') }}
                    </div>
                    <div>
                        <label href="#"
                               class="cursor-pointer font-size-12px btn btn-sm btn-primary mb-0 ml-2 choose-button"><i
                                    class="fas fa-plus font-size-12px"></i>&nbsp;{{__('Charger fichier')}}
                            <input type="file" name="files[]" id="editTaskAddAttachment" class="d-none" multiple>
                        </label>
                        <button type="submit" class="btn btn-sm btn-primary ml-2 btn-upload"
                                data-loading-text="<span class='spinner-border spinner-border-sm'></span> Télécharger...">
                            <i class="fas fa-upload font-size-12px"></i>&nbsp;{{__('Télécharger')}}</button>
                    </div>
                </div>
                <div class="x-content p-2 attachments-content-edit" id="card-attachments-container-edit">
                    <div class="text-center" id="noAttachmentFound"></div>
                    <div class="row edit-task-attachment" id="previewImageEdit">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('description', __('Description').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'taskEditDescription']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Enregistrer'), ['type'=>'submit','class' => 'btn btn-success','id'=>'btnTaskEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Validation..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
