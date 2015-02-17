<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Form Validation</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <!-- BEGIN FORM-->
                <form action="#" id="form_sample_1" class="form-horizontal">
                    <fieldset>
                        <div class="alert alert-error hide">
                            <button class="close" data-dismiss="alert"></button>
                            You have some form errors. Please check below.
                        </div>
                        <div class="alert alert-success hide">
                            <button class="close" data-dismiss="alert"></button>
                            Your form validation is successful!
                        </div>
                        <div class="control-group">
                            <label class="control-label">Name<span class="required">*</span></label>
                            <div class="controls">
                                <input type="text" name="name" data-required="1" class="span6 m-wrap"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email<span class="required">*</span></label>
                            <div class="controls">
                                <input name="email" type="text" class="span6 m-wrap"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">URL<span class="required">*</span></label>
                            <div class="controls">
                                <input name="url" type="text" class="span6 m-wrap"/>
                                <span class="help-block">e.g: http://www.demo.com or http://demo.com</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Number<span class="required">*</span></label>
                            <div class="controls">
                                <input name="number" type="text" class="span6 m-wrap"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Digits<span class="required">*</span></label>
                            <div class="controls">
                                <input name="digits" type="text" class="span6 m-wrap"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Credit Card<span class="required">*</span></label>
                            <div class="controls">
                                <input name="creditcard" type="text" class="span6 m-wrap"/>
                                <span class="help-block">e.g: 5500 0000 0000 0004</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Occupation&nbsp;&nbsp;</label>
                            <div class="controls">
                                <input name="occupation" type="text" class="span6 m-wrap"/>
                                <span class="help-block">optional field</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category<span class="required">*</span></label>
                            <div class="controls">
                                <select class="span6 m-wrap" name="category">
                                    <option value="">Select...</option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Validate</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
    <!-- /block -->
</div>