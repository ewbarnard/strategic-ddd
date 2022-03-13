<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExceptionReport Entity
 *
 * @property int $id
 * @property string $description
 * @property array|null $detail
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ExceptionReport extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'description' => true,
        'detail' => true,
        'created' => true,
        'modified' => true,
    ];

	public const FIELD_ID = 'id';
	public const FIELD_DESCRIPTION = 'description';
	public const FIELD_DETAIL = 'detail';
	public const FIELD_CREATED = 'created';
	public const FIELD_MODIFIED = 'modified';
}
