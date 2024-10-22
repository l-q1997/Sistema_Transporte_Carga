<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\pedido;

class pedidoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'pedido';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pedido());

        $grid->column('id', __('Id'));
        $grid->column('carga', __('Carga'));
        $grid->column('origen', __('Origen'));
        $grid->column('destino', __('Destino'));
        $grid->column('fecha', __('Fecha'));
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
        $show = new Show(pedido::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('carga', __('Carga'));
        $show->field('origen', __('Origen'));
        $show->field('destino', __('Destino'));
        $show->field('fecha', __('Fecha'));
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
        $form = new Form(new pedido());

        $form->text('carga', __('Carga'));
        $form->text('origen', __('Origen'));
        $form->text('destino', __('Destino'));
        $form->datetime('fecha', __('Fecha'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
