<?php

namespace App\Admin\Controllers;

use App\Models\Projects;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class ProjectsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = "";

    public function __construct()
    {
        $this->title = Menu::whereUri('/projects')->first()->title;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Projects());
        $grid->model()->orderBy('id', 'desc');

        $grid->expandFilter();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 3, function ($filter) {
                $filter->like('title', 'Tên sản phẩm');
            });
        });

        $grid->rows(function (Grid\Row $row) {
            $row->column('number', ($row->number + 1));
        });
        $grid->column('number', 'STT');
        $grid->title('Tên dự án');
        $grid->description('Mô tả')->display(function ($val) {
            $html = null;
            $html .= "<div>" . $val . "</div>";
            return $html;
        });

        $grid->column('pictures', 'Ảnh sản phẩm')->display(function () {
            $array = $this->pictures;
            if ($array != null && sizeof($array) > 0) {
                // unset($array[0]);
                return $array;
            }
        })->lightbox(['width' => 80, 'height' => 50]);
        $grid->column('type', 'Loại')->display(function ($val) {
            if ($val == 1) {
                return '<span class="label label-success">Dự án của chúng tôi</span>';
            } elseif ($val == 2) {
                return '<span class="label label-warning">Công trình nổi bật</span>';
            } else {
                return '<span class="label label-danger">Dự án</span>';
            }
        });
        $grid->column('status', 'Trạng thái')->display(function ($val) {
            return $val == 1 ? '<span class="label label-success"> Mở</span>' :  '<span class="label label-info"> Đóng</span>';
        });
        $grid->disableColumnSelector();
        $grid->disableBatchActions();
        $grid->paginate(10);

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
        $show = new Show(Projects::findOrFail($id));

        $show->field('id', __('ID'));
        $show->title('Tên dự án');
        $show->description('Mô tả dự án')->display(function ($val) {
            $html = null;
            $html .= "<div>" . $val . "</div>";
            return $html;
        });
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
        $form = new Form(new Projects);
        $form->text('title', 'Tên dự án')->rules(['required']);
        $form->summernote('description', 'Mô tả dự án');
        $form->multipleFile('pictures', 'Ảnh')
            ->rules('mimes:jpeg,png,jpg')
            ->help('Ảnh đầu tiên sẽ hiển thị là ảnh đại diện')
            ->removable();
        $types = [
            1 => 'Dự án của chúng tôi',
            2 => 'Công trình nổi bật',
            3 => 'Dự án'
        ];
        $form->select('type', 'Lựa chọn')->options($types)->rules(['required'])->default(3);
        $states = [
            'on'  => ['value' => 1, 'text' => 'Mở', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Đóng', 'color' => 'danger'],
        ];

        $form->switch('status', 'Trạng thái')->states($states)->default(1);
        $form->confirm('Xác nhận lưu dữ liệu ?');
        $form->disableEditingCheck();
        $form->disableCreatingCheck();
        $form->disableViewCheck();
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });

        return $form;
    }
}
