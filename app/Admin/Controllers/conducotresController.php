<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\conducotres;

class conducotresController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'conducotres';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new conducotres());

        $grid->column('id', __('Id'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('edad', __('Edad'));
        $grid->column('licencia', __('Licencia'));
        $grid->column('experiecnia', __('Experiecnia'));
        $grid->column('disponibilidad', __('Disponibilidad'));
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
        $show = new Show(conducotres::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nombre', __('Nombre'));
        $show->field('edad', __('Edad'));
        $show->field('licencia', __('Licencia'));
        $show->field('experiecnia', __('Experiecnia'));
        $show->field('disponibilidad', __('Disponibilidad'));
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
        $form = new Form(new conducotres());

        $form->text('nombre', __('Nombre'));
        $form->number('edad', __('Edad'));
        $form->text('licencia', __('Licencia'));
        $form->number('experiecnia', __('Experiecnia'));
        $form->text('disponibilidad', __('Disponibilidad'));

        return $form;
    }
}
