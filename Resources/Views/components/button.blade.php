<?php
$elementID = 'adminMediaButton-' . str_random(20);
?>
<button
        title="{{trans('media-manager::admin.button_title')}}"
        class="media-manager btn btn-sm btn-warning"
        data-config='{{\ProVision\MediaManager\MediaManager::config(array_merge_recursive(['filters'=>['mediaable_type'=>get_class($model),'mediaable_id'=>$model->id]],$options))}}'
>
    <i class="fa fa-picture-o" aria-hidden="true"></i>
</button>
