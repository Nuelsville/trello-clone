<ul class="nav nav-tabs" role="tablist">
        <!--home-->
        <li class="nav-item"> <a class="nav-link active ajax-request" data-toggle="tab" href="javascript:void(0);"
                        role="tab" data-url="<?php echo e(url('tasks/content/'.$task->task_id.'/show-main?show=tab')); ?>"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel"><span
                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                class="hidden-xs-down"><?php echo app('translator')->get('lang.task'); ?></span></a> </li>

        <!--customfields-->
        <li class="nav-item"> <a class="nav-link ajax-request" data-toggle="tab" href="javascript:void(0);" role="tab"
                        data-url="<?php echo e(url('tasks/content/'.$task->task_id.'/show-customfields')); ?>"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel">
                        <span class="hidden-sm-up"><i class="ti-menu"></i></span>
                        <span class="hidden-xs-down"><?php echo app('translator')->get('lang.custom_fields'); ?></span></a>
        </li>


        <!--my notes-->
        <li class="nav-item"> <a class="nav-link ajax-request" data-toggle="tab" href="javascript:void(0);" role="tab"
                        data-url="<?php echo e(url('tasks/content/'.$task->task_id.'/show-mynotes')); ?>"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel">
                        <span class="hidden-sm-up"><i class="ti-notepad"></i></span>
                <span
                                class="hidden-xs-down"><?php echo app('translator')->get('lang.my_notes'); ?></span></a>
        </li>
</ul><?php /**PATH /home/venduvhs/public_html/trello.vendit.ng/application/resources/views/pages/task/content/tabmenu.blade.php ENDPATH**/ ?>