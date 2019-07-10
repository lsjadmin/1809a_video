<?php

namespace App\Admin\Controllers;

use App\Model\VideoModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '视频管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VideoModel);

        $grid->column('v_id', __('V id'));
        $grid->column('title', __('Title'));
        $grid->column('path', __('Path'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(VideoModel::findOrFail($id));

        $show->field('v_id', __('V id'));
        $show->field('title', __('Title'));
        $show->field('path', __('Path'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VideoModel);

          $form->number('v_id', __('V id'));
        $form->text('title', __('Title'));
        $form->file('path', __('Path'))->uniqueName();
        $form->datetime('addtime', __('Add time'))->default(date('Y-m-d H:i:s'));
        return $form;
    }
}
