<div class="type-title"> Project purpose</div>
<div class="project-select" data-toggle="buttons">
    <label class="btn btn-default active">
        <input name="project_purpose" checked="checked" type="radio" value="1" onchange="update('1');">
        <span>School</span>
    </label>
    <label class="btn btn-default ">
        <input name="project_purpose" type="radio" value="2" onchange="update('2');">
        <span>Work</span>
    </label>
</div>
<div class="type-title"> Type of service</div>
<div class="service-select" data-toggle="buttons">
    <label class="btn btn-default active">
        <input name="type_of_writing" checked="checked" type="radio" value="1">
        <span>Writing</span>
    </label>
    <label class="btn btn-default ">
        <input name="type_of_writing" type="radio" value="2">
        <span>Editing</span>
    </label>
    <label class="btn btn-default ">
        <input name="type_of_writing" type="radio" value="3">
        <span>Proofreading</span>
    </label>
</div>
<div class="type-title">Writing level</div>
<div class="level-selector">
    <select name="writing_level" class="custom-select level-select" required>
        <option></option>
        <option value="1">High School</option>
        <option value="2">1st Year</option>
        <option value="3">2nd Year</option>
        <option value="4">3rd Year</option>
        <option value="5">4th/Honors Year</option>
        <option value="6">Masters</option>
        <option value="7">PhD</option>
    </select>
</div>