<div id="AddModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Nouveau Partenaire') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id' => 'addNewForm', 'files' => true]) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('name', __('Nom Entreprise')) }}<span class="required">*</span>
                        {{ Form::text('name', '', ['id' => 'name', 'class' => 'form-control', 'required','tabindex' => '1']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('department_id', __('Départements')) }}<span class="required">*</span>
                        @if(auth()->user()->can('manage_department'))
                           <div class="input-group flex-nowrap">
                               {{ Form::select('department_id', $departments, null, ['id' => 'department_id', 'class' => 'form-control', 'required','placeholder'=>'Choisir Département','tabindex' => '2']) }}
                               <div class="input-group-append">
                                   <div class="input-group-text">
                                       <a href="#" data-toggle="modal" data-target="#addDepartmentModal" title="{{ __('Ajouter département') }}" tabindex='3' ><i class="fa fa-plus"></i></a>
                                   </div>
                               </div>
                           </div>
                        @else
                            {{ Form::select('department_id', $departments, null, ['id' => 'department_id', 'class' => 'form-control', 'required','placeholder'=>'Choisir Département','tabindex' => '2']) }}
                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('email', __('Email')) }}
                        {{ Form::email('email', '', ['id' => 'email', 'class' => 'form-control','tabindex' => '4']) }}
                    </div>
                </div>
                @can('manage_users')
                    <div class="custom-control custom-checkbox mb-2 " id="client_checkbox">
                        <input type="checkbox" class="custom-control-input" id="addClient" tabindex="5">
                        <label class="custom-control-label"
                               for="addClient">{{__('Créer un espace pour ce partenaire')}}</label>
                    </div>
                    <div class="row" id="password">
                        <div class="form-group col-sm-6">
                            {{ Form::label('password', __('Nouveau mot de passe')) }}<span class="required" id="password_label">*</span>
                            <div class="input-group">
                                <input class="form-control input-group__addon" id="new_password" type="password"
                                       name="password" tabindex="6">
                                <div class="input-group-append input-group__icon">
                                <span class="input-group-text changeType">
                                    <i class="icon-ban icons"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            {{ Form::label('password_confirmation', __('Confirmer Mot de passe')) }}<span class="required" id="password_label2">*</span>
                            <div class="input-group">
                                <input class="form-control input-group__addon" id="new_confirm_password" type="password"
                                       name="password_confirmation" tabindex="7">
                                <div class="input-group-append input-group__icon">
                                <span class="input-group-text changeType">
                                    <i class="icon-ban icons"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('website', __('Site internet')) }}
                        {{ Form::url('website', '', ['id' => 'website', 'class' => 'form-control', 'tabindex' => '8']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-xl-3">
                        <div class="form-group">
                            {{ Form::label('photo', __('Profil')) }}
                            <br>
                            <label class="image__file-upload btn btn-primary text-color-white" tabindex="9">
                                {{ __('Charger Photo') }}
                                {{ Form::file('photo',['id'=>'clientProfile','class' => 'd-none']) }}
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class=" preview-image-video-container">
                            <img id='previewImage' class="img-thumbnail thumbnail-preview"
                                 src="{{asset('assets/img/user-avatar.png')}}"/>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('Valider'), ['type' => 'submit', 'class' => 'btn btn-primary', 'id' => 'btnSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span>Validation..." , 'tabindex' => '10']) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal" tabindex="9">{{ __('Annuler') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
