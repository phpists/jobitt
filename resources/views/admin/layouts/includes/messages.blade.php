<div class="validation_messages">
    @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(session()->get('error'))
        <div class="alert alert-error" style="background: red; color: white" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif
</div>





