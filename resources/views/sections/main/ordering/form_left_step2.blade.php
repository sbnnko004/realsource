<div class="type-title">Project deadline</div>
<div class="dead-line-picker">
    <div>
        <input class="form-control " type="text" id="datepicker" name="deadline_date" placeholder="dd-mm-yyyy" required>
    </div>
    <div>                                            
        <input class="form-control" type="text" id="timepicker" name="deadline_time" placeholder="hh:mm p" required>
    </div>
</div>
<div class="type-title">Subject area</div>
    <select name="subject_area" class="custom-select level-select" required>
        <option></option>
        <option value="1">Option</option>
    </select>
<div class="type-title">Subject</div>
<select name="subject" class="custom-select level-select" class="form-control" required>
    <option value="">Please select subject</option>
    <option value="1">Option</option>
</select>
<div class="sourcing">
    <div class="type-title">Formating &amp; citation style</div>
    <div class="type-title">Number of sources</div>
    <select name="formating" class="custom-select level-select" required>
        <option value="1">None</option>
        <option value="2">MLA</option>
        <option value="3">APA</option>
        <option value="4">Chicago</option>
        <option value="5">Harvard</option>
        <option value="6">Cancouver</option>
    </select>
    <input id="page-count" type="number"  name="number_of_sources" value="1" min="1" step="1" required>
</div>
