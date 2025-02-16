<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ruta;

class rutaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ruta';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ruta());

        $grid->column('id', __('Id'));
        $grid->column('Asignacion', __('Asignacion'));
        $grid->column('planificacion', __('Planificacion'));
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
        $show = new Show(ruta::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Asignacion', __('Asignacion'));
        $show->field('planificacion', __('Planificacion'));
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
        $form = new Form(new ruta());

        $form->text('Asignacion', __('Asignacion'));
        $form->text('planificacion', __('Planificacion'));

        return $form;
    }
}
