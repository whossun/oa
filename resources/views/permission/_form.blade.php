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
    <div class="row">
        <div class="col-md-4">
            <div class="form-group form-md-radios">
                <label>权限类型</label>
                <div class="md-radio-inline">
                    <div class="md-radio {{ $errors->has('is_menu') ? 'has-error' : 'has-info' }}">
                        <input type="radio" class="md-radiobtn" name="is_menu" id="is_menu1" value="1">
                        <label for="is_menu1">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> 菜单
                        </label>
                    </div>
                    <div class="md-radio has-error">
                        <input type="radio" checked class="md-radiobtn" name="is_menu" id="is_menu2" value="0">
                        <label for="is_menu2">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> 功能
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-4">
        <div class="form-actions noborder">
            <button data-loading-text="Loading..." class="btn blue mt-ladda-btn ladda-button submit-btn margin-right-10" data-style="slide-right">
                <span class="ladda-label">Submit</span>
                <span class="ladda-spinner"></span>
                <span class="ladda-spinner"></span>
                <div class="ladda-progress" style="width: 127px;"></div>
            </button>
            <button class="btn default" type="button" onclick="javascript:history.back()">Cancel</button>


        </div>
    </div>
</div>

<input type="hidden" name="pid" value="{{ $pid }}">