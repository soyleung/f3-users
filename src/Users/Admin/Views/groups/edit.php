<div class="well">

<form id="detail-form" class="form-horizontal" method="post">
    
    <div class="clearfix">

        <div class="pull-right">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <input id="primarySubmit" type="hidden"
                    value="save_edit" name="submitType" />
                <button type="button"
                    class="btn btn-primary dropdown-toggle"
                    data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a
                        onclick="document.getElementById('primarySubmit').value='save_new'; document.getElementById('detail-form').submit();"
                        href="javascript:void(0);">Save & Create Another</a>
                    </li>
                    <li><a
                        onclick="document.getElementById('primarySubmit').value='save_close'; document.getElementById('detail-form').submit();"
                        href="javascript:void(0);">Save & Close</a></li>
                </ul>
            </div>
            &nbsp; <a class="btn btn-default" href="./admin/users/groups">Cancel</a>
        </div>

    </div>
    
    <hr/>
    
    <!-- /.form-group -->

    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab-basics" data-toggle="tab"> Basics </a>
        </li>
        <?php foreach ((array) $this->event->getArgument('tabs') as $key => $title ) { ?>
        <li>
            <a href="#tab-<?php echo $key; ?>" data-toggle="tab"> <?php echo $title; ?> </a>
        </li>
        <?php } ?>
    </ul>


    <div class="tab-content">

        <div class="tab-pane active" id="tab-basics">
            
            <?php echo $this->renderLayout('Users/Admin/Views::groups/fields_basics.php'); ?>

		</div>
		
		<?php foreach ((array) $this->event->getArgument('content') as $key => $content ) { ?>
	        <div class="tab-pane" id="tab-<?php echo $key; ?>">
	            <?php echo $content; ?>
	        </div>
		<?php } ?>
		
    </div>

</form>

</div>