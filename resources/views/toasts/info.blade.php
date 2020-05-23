<div class="toast {{$toast->type}}" role="alert" aria-live="assertive" aria-atomic="true" data-delay="{{$toast->delay}}" style="position: relative; width: 100%;">
    <div class="toast-header">
        <i class="fas fa-info-circle"></i>
      <strong class="mr-auto">{{$toast->title}}</strong>
      <small class="text-muted">{{$toast->time}}</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
        {!! $toast->message !!}
    </div>
</div>