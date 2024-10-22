<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\vehiculos;

class vehiculosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'vehiculos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new vehiculos());

        $grid->column('id', __('Id'));
        $grid->column('tipo', __('Tipo'));
        $grid->column('capacidad', __('Capacidad'));
        $grid->column('estado', __('Estado'));
        $grid->column('mantenimiento', __('Mantenimiento'));
        $grid->column('fecha', __('Fecha'));
        $grid->column('Alertas', __('Alertas'));
        $grid->column('rutas', __('Rutas'));
        $grid->column('entregas', __('Entregas'));
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
        $show = new Show(vehiculos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('tipo', __('Tipo'));
        $show->field('capacidad', __('Capacidad'));
        $show->field('estado', __('Estado'));
        $show->field('mantenimiento', __('Mantenimiento'));
        $show->field('fecha', __('Fecha'));
        $show->field('Alertas', __('Alertas'));
        $show->field('rutas', __('Rutas'));
        $show->field('entregas', __('Entregas'));
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
        $form = new Form(new vehiculos());

        $form->text('tipo', __('Tipo'));
        $form->number('capacidad', __('Capacidad'));
        $form->text('estado', __('Estado'));
        $form->text('mantenimiento', __('Mantenimiento'));
        $form->datetime('fecha', __('Fecha'))->default(date('Y-m-d H:i:s'));
        $form->text('Alertas', __('Alertas'));
        $form->text('rutas', __('Rutas'));
        $form->text('entregas', __('Entregas'));

        return $form;
    }
}
