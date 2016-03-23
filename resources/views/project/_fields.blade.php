<?php
$value = "";
if (isset($project)) {
    $value = $project->title;
}
?>
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Title</label>

    <div class="col-md-8">
        <input type="title" class="form-control" name="title" value="{{ $value }}">

        @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
        @endif
    </div>
</div>

<?php
if (isset($project)) {
    $value = $project->description;
}
?>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Description</label>

    <div class="col-md-8">
        <textarea name="description" class="form-control">{{ $value }}</textarea>

        @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
        @endif
    </div>
</div>


<?php
$value = "";
if (isset($project)) {
    $value = $project->status;
}
?>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Status</label>

    <div class="col-md-8">
        <select name="status" class="form-control">
            <option  value=''>please select</option>
            <option <?php echo ($value == "ENABLE") ? "selected" : ""; ?> value='ENABLE'>Enable</option>
            <option <?php echo ($value == "DISABLE") ? "selected" : ""; ?> value='DISABLE'>Disable</option>
        </select>

        @if ($errors->has('status'))
        <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
        @endif
    </div>
</div>


<?php
$value = "";
if (isset($project)) {
    $value = $project->start_date;
}
?>
<div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Start Date</label>

    <div class="col-md-8">
        <input type="start_date" class="datetimepicker-date form-control" name="start_date" value="{{ $value }}">

        @if ($errors->has('start_date'))
        <span class="help-block">
            <strong>{{ $errors->first('start_date') }}</strong>
        </span>
        @endif
    </div>
</div>



<?php
$value = "";
if (isset($project)) {
    $value = $project->deadline;
}
?>
<div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Deadline</label>

    <div class="col-md-8">
        <input type="deadline" class="datetimepicker-date form-control" name="deadline" value="{{ $value }}">
        @if ($errors->has('deadline'))
        <span class="help-block">
            <strong>{{ $errors->first('deadline') }}</strong>
        </span>
        @endif
    </div>
</div>