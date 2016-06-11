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
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('label') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="label" name="label" value="{{ $label }}" />
                    <label for="label">权限名称(中文)</label>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('info') ? 'has-error' : 'has-info' }}">
                <div class="input-group right-addon">
                    <input type="text" class="form-control" id="info" name="info" value="{{ $info }}" />
                    <label for="info">权限说明</label>
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