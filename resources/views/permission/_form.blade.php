{{ csrf_field() }}
<div class="form-body margin-bottom-40">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('name') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $name }}" />
                    <label for="name">权限标识(英文)</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('display_name') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="display_name" name="display_name" value="{{ $display_name }}" />
                    <label for="display_name">权限名称(中文)</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('description') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="description" name="description" value="{{ $description }}" />
                    <label for="description">权限说明</label>
                    <span class="input-group-addon"></span>
                </div>
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

<input type="hidden" name="pid" value="{{ $pid }}">