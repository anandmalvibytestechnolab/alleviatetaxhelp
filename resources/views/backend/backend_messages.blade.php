@if(Session::get('message'))
    <div class="alert {{Session::get('message_class')}} col-12">
        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <p>
            {{Session::get('message')}}
        </p>
    </div>
@endif