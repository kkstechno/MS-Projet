<div id="EditModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Editer un partenaire') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id' => 'editForm', 'files' => true]) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="editValidationErrorsBox"></div>
                {{ Form::hidden('client_id', null, ['id' => 'clientId']) }}
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('name', __('Nom entreprise')) }}<span class="required">*</span>
                        {{ Form::text('name', '', ['id' => 'edit_name', 'class' => 'form-control', 'required','tabindex' => '1']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('department_id', __('Département')) }}<span
                                class="required">*</span>
                        @if(auth()->user()->can('manage_department'))
                            <div class="input-group flex-nowrap">
                            {{ Form::select('department_id', $departments, null, ['id' => 'edit_department_id', 'class' => 'form-control', 'required','placeholder'=>'Choisir Département','tabindex' => '2']) }}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <a href="#" data-toggle="modal" data-target="#addDepartmentModal" title="{{ __('Ajouter département') }}" tabindex='3' ><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            </div>
                        @else
                            {{ Form::select('department_id', $departments, null, ['id' => 'edit_department_id', 'class' => 'form-control', 'required','placeholder'=>'Choisir Département','tabindex' => '2']) }}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('email', __('Email')) }}
                        {{ Form::email('email', '', ['id' => 'edit_email', 'class' => 'form-control','tabindex' => '4']) }}
                        {{-- <label id="delete-warning" class="mb-0"></label> --}}
                    </div>
                </div>
{{--                @can('manage_users')--}}
                    <div class="row" id="edit_password">
                        <div class="form-group col-sm-6">
                            {{ Form::label('password', __('Nouveau mot de passe')) }}
                            <div class="input-group">
                                <input class="form-control input-group__addon" id="new_edit_password" type="password"
                                       name="password" tabindex="5">
                                <div class="input-group-append input-group__icon">
                                <span class="input-group-text changeType">
                                    <i class="icon-ban icons"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            {{ Form::label('password_confirmation', __('Confirmer mot de passe')) }}<span
                                    class="required confirm-pwd">*</span>
                            <div class="input-group">
                                <input class="form-control input-group__addon" id="new_confirm_edit_password" type="password"
                                       name="password_confirmation" tabindex="6">
                                <div class="input-group-append input-group__icon">
                                <span class="input-group-text changeType">
                                    <i class="icon-ban icons"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                @endcan--}}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('website', __('Site internet')) }}
                        {{ Form::url('website', '', ['id' => 'edit_website', 'class' => 'form-control','tabindex' => '7']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-xl-3">
                        <div class="form-group">
                            {{ Form::label('photo', __('Profil')) }} <br>
                            <label
                                    class="image__file-upload btn btn-primary text-color-white"
                                    tabindex="8"> {{ __('Charger photo') }}
                                {{ Form::file('photo',['id'=>'clientEditProfile','class' => 'd-none']) }}
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" preview-image-video-container">
                            <img id='editPreviewImage' class="img-thumbnail thumbnail-preview"
                                 src="{{asset('assets/img/user-avatar.png')}}"/>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Valider'), ['type' => 'submit', 'class' => 'btn btn-primary', 'id' => 'btnEditSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Validation..." , 'tabindex' => '9']) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
