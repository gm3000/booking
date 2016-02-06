<?php

/**
 * hotels model config
 */

return array(

    'title' => 'Cities',

    'single' => 'City',

    'model' => '\App\City',

    'form_width' =>700,

    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name_en',
        'name_cn',
        'country_id' => array(
            'title' => 'country',
            'relationship' => 'country',
            'select' => '(:table).name_en',
        ),
    ),

    'edit_fields' => array(
        'name_en' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'name_cn' => array(
            'title' => '中文名称',
            'type' => 'text',
        ),
        'country' => array(
            'title' => 'Country',
            'type' => 'relationship',
            'name_field' => 'name_en',
        ),
        'desc_en' => array(
            'title' => 'Description',
            'type' => 'wysiwyg',
        ),
        'desc_cn' => array(
            'title' => '中文描述',
            'type' => 'wysiwyg',
        ),

    ),

);