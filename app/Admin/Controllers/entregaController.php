<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\entrega;

class entregaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'entrega';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new entrega());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('estado', __('Estado'));
        $grid->column('completa', __('Completa'));
        $grid->column('pendiente', __('Pendiente'));
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
        $show = new Show(entrega::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('estado', __('Estado'));
        $show->field('completa', __('Completa'));
        $show->field('pendiente', __('Pendiente'));
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
        $form = new Form(new entrega());

        $form->image('image', __('Image'));
        $form->text('estado', __('Estado'));
        $form->text('completa', __('Completa'));
        $form->text('pendiente', __('Pendiente'));

        return $form;
    }
}
