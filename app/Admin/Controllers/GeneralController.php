<?php

namespace App\Admin\Controllers;

use App\Models\General;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GeneralController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'general controller';

    protected $list_type = [
        1 => 'Intro',
        2 => 'Giới thiệu',
        3 => 'Lý do'
    ];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new General());
        $list_type = $this->list_type;
        $grid->filter(function ($filter) use ($list_type) {
            $filter->disableIdFilter();
            $filter->expand();
            $filter->equal('type', 'Loại')->select($list_type);
        });
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', ($row->number + 1));
        });
        $grid->column('number', 'STT');
        $grid->column('title', 'Tiêu đề');
        $grid->column('status', 'Trạng thái')->display(function ($val) {
            return $val == 1 ? '<span class="label label-success"> Mở</span>' :  '<span class="label label-info"> Đóng</span>';
        });
        $grid->column('type', 'Loại')->display(function ($val) {
            if ($val == 1) {
                return '<span class="label label-success">Intro</span>';
            } elseif ($val == 2) {
                return '<span class="label label-warning">Giới thiệu</span>';
            } else {
                return '<span class="label label-danger">Lý do</span>';
            }
        });
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(General::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('title', 'Tiêu đề');
        $show->status('Trạng thái')->as(function ($val) {
            return $val == 1 ? 'Đóng' : 'Mở';
        });
        $show->type('Loại')->as(function ($val) {
            if ($val == 1) {
                return 'Intro';
            } elseif ($val == 2) {
                return 'Giới thiệu';
            } else {
                return 'Lý do';
            };
        });

        $show->description('Mô tả')->as(function ($val) {
            return strip_tags($val);
        });
        $show->pictures()->image();
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new General());

        $form->display('id', __('ID'));
        $form->text('title', 'Tiêu đề')->rules(['required']);
        $form->summernote('description', 'Mô tả dự án')->rules(['required']);
        $form->multipleFile('pictures', 'Ảnh')
            ->rules('mimes:jpeg,png,jpg')
            ->help('Ảnh đầu tiên sẽ hiển thị là ảnh đại diện')
            ->removable();
        $types = [
            1 => 'Intro',
            2 => 'Giới thiệu',
            3 => 'Lý do'

        ];
        $form->select('type', 'Lựa chọn')->options($types)->rules(['required']);

        $states = [
            'on'  => ['value' => 1, 'text' => 'Đóng', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Mở', 'color' => 'danger'],
        ];

        $form->switch('status', 'Trạng thái')->states($states);

        $form->confirm('Xác nhận lưu dữ liệu ?');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));
        $form->disableCreatingCheck();
        $form->disableEditingCheck();
        $form->disableViewCheck();
        return $form;
    }
}
