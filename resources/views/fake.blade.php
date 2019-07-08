

<form method="get" action="/test/1" autocomplete="off">
    @csrf
    {{ csrf_field() }}
    {{--    {{ method_field('PATCH') }}--}}

    {{-------------------------------------------------------------------------------------------------}}



    {{--<div class="col-md-4 mb-3 text-right">--}}
    {{--<label for="validationCustomUsername">آدرس ایمیل</label>--}}
    {{--<input type="text" name="email" class="form-control text-left" id="validationCustom03" placeholder="E-Mail Address"  required>--}}
    {{--</div>--}}

    <div class="text-right">
        <button class="btn btn-primary" type="submit">fake</button>
    </div>
</form>