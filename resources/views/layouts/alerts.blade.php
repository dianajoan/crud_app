<div class="container w-full p-0" style="text-align: center;">
    @guest
        @if($message = Session::get('danger'))
            <div class="alert alert-danger bg-red-800" style="margin: 10px;">
                <i class="fa fa-times-circle"></i> : {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('warning'))
            <div class="alert alert-warning" style="margin: 10px;">
                <i class="fa fa-info-circle"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('success'))
            <div class="alert alert-success" style="margin: 10px;">
                <i class="fa fa-check"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('info'))
            <div class="alert alert-info" style="margin: 10px;">  
                <i class="fa fa-lightbulb"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        {{-- end of unauthenticated --}}
    @else
        @if($message = Session::get('danger'))
            <div class="alert alert-danger" style="margin: 10px;"> 
                <i class="fa fa-times-circle"></i> : {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('warning'))
            <div class="alert alert-warning" style="margin: 10px;"> 
                <i class="fa fa-info-circle"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('success'))
            <div class="alert alert-success" style="margin: 10px;">  
                <i class="fa fa-check"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
        @if($message = Session::get('info'))
            <div class="alert alert-info" style="margin: 10px;">  
                <i class="fa fa-lightbulb"></i> : <b>{{ $message }}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
        @endif
    @endguest
</div>