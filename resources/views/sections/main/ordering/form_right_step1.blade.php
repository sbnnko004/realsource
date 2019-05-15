<div class="type-title">Project type</div>
<div class="level-selector">
    <select name="project_type" class="custom-select level-select" required>
        <option></option>
        <option value="1">Admission Essay</option>
    </select>
</div>
<div class="page-setting">
    <div>
        <div class="type-title">Page Count</div>
        <input id="page-count" type="number"  name="page_count" value="1" min="1" step="1">
        <p class="word-count-results">1,200 words</p>
    </div>
    <div>
        <div class="type-title">Line Spacing</div>
        <div class="linespacing-select" data-toggle="buttons">
            <label class="btn btn-default active">
                <input name="line_spacing" checked="checked" type="radio" value="1">
                <span>2</span>
            </label>
            <label class="btn btn-default ">
                <input name="line_spacing" type="radio" value="2">
                <span>1</span>
            </label>
        </div>
    </div>    
</div>
<!--div class="type-title">Type of referencing</div>
<div class="referencing-select" data-toggle="buttons">
    <label class="btn btn-default active">
        <input name="referencing" checked="checked" type="radio" value="1">
        <span>MLA</span>
    </label>
    <label class="btn btn-default ">
        <input name="referencing" type="radio" value="2">
        <span>APA</span>
    </label>
    <label class="btn btn-default ">
        <input name="referencing" type="radio" value="3">
        <span>Chicago</span>
    </label>
    <label class="btn btn-default ">
        <input name="referencing" type="radio" value="4">
        <span>Harvard</span>
    </label>
    <label class="btn btn-default ">
        <input name="referencing" type="radio" value="5">
        <span>Cancouver</span>
    </label>
</div-->
<div class="type-title">Writer Preference</div>
<div class="writer-select" data-toggle="buttons">
    <label class="btn btn-default active">
        <input name="writer_preference" checked="checked" type="radio" value="1">
        <span>Best Available</span>
    </label>
    <label  class="btn btn-default ">
        <input id="by-order-id" name="writer_preference" type="radio" value="2">
        <span>By Order ID</span>
    </label>
</div>
<input class="form-control" type="text" id="writer_by_order_id" name="writer_by_order_id" placeholder="Order ID">