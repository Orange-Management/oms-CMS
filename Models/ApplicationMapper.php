<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\CMS\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\CMS\Models;

use phpOMS\DataStorage\Database\DataMapperAbstract;

/**
 * Application mapper.
 *
 * @package Modules\CMS\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class ApplicationMapper extends DataMapperAbstract
{
    /**
     * Columns.
     *
     * @var array<string, array<string, bool|string|array>>
     * @since 1.0.0
     */
    protected static array $columns = [
        'cms_application_id'    => ['name' => 'cms_application_id',    'type' => 'int',      'internal' => 'id'],
        'cms_application_name'  => ['name' => 'cms_application_name',  'type' => 'string',   'internal' => 'name'],
    ];

    /**
     * Model to use by the mapper.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $model = Application::class;

    /**
     * Primary table.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $table = 'cms_application';

    /**
     * Primary field name.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $primaryField = 'cms_application_id';
}
