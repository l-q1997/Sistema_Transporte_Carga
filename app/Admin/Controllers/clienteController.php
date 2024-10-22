<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cliente;

class clienteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cliente';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cliente());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('apellido', __('Apellido'));
        $grid->column('correo', __('Correo'));
        $grid->column('pedidos', __('Pedidos'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(cliente::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('nombre', __('Nombre'));
        $show->field('apellido', __('Apellido'));
        $show->field('correo', __('Correo'));
        $show->field('pedidos', __('Pedidos'));
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
        $form = new Form(new cliente());

        $form->image('image', __('Image'));
        $form->text('nombre', __('Nombre'));
        $form->text('apellido', __('Apellido'));
        $form->textarea('correo', __('Correo'));
        $form->text('pedidos', __('Pedidos'));

        return $form;
    }
}
