

<form method="get" action="/test/1" autocomplete="off">
    @csrf
    {{ csrf_field() }}
{{--    {{ method_field('PATCH') }}--}}

    {{-------------------------------------------------------------------------------------------------}}

        <div class="col-md-4 mb-3 text-right">
            <label for="validationCustom01">Start</label>
            <input type="date" name="start" class="form-control" id="validationCustom01" placeholder="First name" required>
        </div>

        <div class="col-md-4 mb-3 text-right">
            <label for="validationCustom02">End</label>
            <input type="date" name="end" class="form-control" id="validationCustom02" placeholder="Last name" required>
        </div>

        {{--<div class="col-md-4 mb-3 text-right">--}}
            {{--<label for="validationCustomUsername">آدرس ایمیل</label>--}}
            {{--<input type="text" name="email" class="form-control text-left" id="validationCustom03" placeholder="E-Mail Address"  required>--}}
        {{--</div>--}}

        <div class="text-right">
            <button class="btn btn-primary" type="submit">send</button>
            <a href="/fake" class="btn btn-primary">Counter Fake</a>
        </div>
</form>