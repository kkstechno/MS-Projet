<div>
    <div class="d-flex justify-content-between">
        <div>
            {{ __('Tous droits réservés') }} &copy; {{ date('Y') }} <span class="">{{ html_entity_decode($settings['app_name']) }}</span>
        </div>
        @if(config('app.footer_version_show'))
            <div>
                <span class="mr-5 text-primary">v{{ getCurrentVersion() }}</span>
            </div>
        @endif
    </div>
</div>
