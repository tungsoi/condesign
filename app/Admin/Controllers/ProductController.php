<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\Supplier;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Http\Request;
use Encore\Admin\Admin as EncoreAdmin;
use Illuminate\Support\Str;


class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = "";

    public function __construct()
    {
        $this->title = Menu::whereUri('/products')->first()->title;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
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
                unset($array[0]);

                return $array;
            }
        })->lightbox(['width' => 80, 'height' => 50]);
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
        $show = new Show(Product::findOrFail($id));

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
        $form = new Form(new Product);
        $form->text('title', 'Tên dự án')->rules(['required']);
        $form->summernote('description', 'Mô tả dự án')->rules(['required']);
        $form->multipleFile('pictures', 'Ảnh')
            ->rules('mimes:jpeg,png,jpg')
            ->help('Ảnh đầu tiên sẽ hiển thị là ảnh đại diện')
            ->removable();

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

    public function getProperty(Request $request)
    {
        $product = Product::find($request->get('q'));
        if ($product) {
            $options = $product->properties;

            $option_data = [];
            foreach ($options as $option) {
                if (!$options) {
                    return null;
                }

                $option_data[] = collect([
                    'id'    =>  $option->id,
                    'text'  =>  "Size: " . $option->size . " (" . $option->lenght . " x " . $option->width . " x " . $option->height . ")  - "
                        . ($option->material->title ?? null)
                        . " - "
                        . number_format($option->price) . " VND"
                ]);
            }

            return $option_data;
        }

        return null;
    }

    public function getInfoProduct(Request $request)
    {
        $product = Product::find($request->data);
        $data = [];

        if ($product) {
            $properties = $product->properties;
            foreach ($properties as $option) {
                if (!$properties) {
                    return null;
                }

                $data['property'][] = collect([
                    'id'    =>  $option->id,
                    'text'  =>  $option->size,
                    // 'text'  =>  "Size: ".$option->size." (".$option->lenght." x ".$option->width." x ".$option->height.")  - "
                    //     . ($option->material->title ?? null)
                    //     ." - "
                    //     .number_format($option->price)." VND",
                    'price' => $option->price
                ]);
            }

            $pictures = $product->pictures;
            if ($pictures) {
                foreach ($pictures as $picture) {
                    $data['pictures'][] = [
                        'asset' => $picture,
                        'link' => asset('uploads/' . $picture)
                    ];
                }
            }
            return $data;
        }

        return null;
    }


    public function getPicture(Request $request)
    {
        $product_pciture = Product::find($request->data)->pictures;
        if ($product_pciture) {
            foreach ($product_pciture as $picture) {
                $pictures[] = [
                    'asset' => $picture,
                    'link' => asset('uploads/' . $picture)
                ];
            }
            return  $pictures;
        }
        return null;
    }
}
