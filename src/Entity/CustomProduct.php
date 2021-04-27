<?php
/**
 * 2007-2020 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 */

namespace PrestaShop\Module\DemoProductForm\Entity;

use ObjectModel;

/**
 * Example object model for module custom product fields
 */
final class CustomProduct extends ObjectModel
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $custom_field = '';

    /**
     * @var string
     */
    public $date_add;

    /**
     * @var string
     */
    public $date_upd;

    /**
     * @var bool forces the id to be set before saving object (because we don't need autogenerated id for this model)
     */
    public $force_id = true;

    public static $definition = [
        'table' => 'demoproductform_custom_product',
        'primary' => 'id',
        'fields' => [
            'custom_field' => ['type' => self::TYPE_STRING],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
            'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        ],
    ];
}
