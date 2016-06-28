{{ csrf_field() }}
<div class="form-body margin-bottom-40">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('name') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $role['name'] }}" />
                    <label for="name">角色标识(英文)</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('display_name') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="display_name" name="display_name" value="{{ $role['display_name'] }}" />
                    <label for="display_name">角色名称(中文)</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('description') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="description" name="description" value="{{ $role['description'] }}" />
                    <label for="description">角色说明</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h4><label class="col-sm-2 control-label" for="level">角色权限：</label></h4>
        <div class="col-md-12">
            <div class="form-group">

                @foreach($permissions as $a)
                    <dl class="permission_list">
                        <dt>
                            <label class="checkbox-inline"><input type="checkbox" name="permission[]" value="{{ $a->id }}" > <strong>{{ $a->display_name }}</strong></label>
                        </dt>
                        <dd>
                            @foreach($a['child'] as $b)
                                <dl class="cl permission_list2">

                                    <dt><label class="checkbox-inline"><input type="checkbox" name="permission[]" value="{{ $b->id }}" > <strong>{{ $b->display_name }}</strong></label></dt>
                                    <dd>
                                        @foreach($b['child'] as $c)
                                            <label class="checkbox-inline"><input type="checkbox" name="permission[]" value="{{ $c->id }}" > {{ $c->display_name }}</label>
                                        @endforeach
                                    </dd>
                                </dl>
                            @endforeach
                        </dd>
                    </dl>
                @endforeach

            </div>
    </div>

</div>



</div>
<div class="row">
    <div class="col-md-8 col-md-offset-4">
        <div class="form-actions noborder">
            <button class="btn blue margin-right-10" type="submit">Submit</button>
            <button class="btn default" type="button">Cancel</button>
        </div>
    </div>
</div>
