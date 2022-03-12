<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DomainEvent Entity
 *
 * @property int $id
 * @property int $id_of_source
 * @property string $source_table
 * @property string $action
 * @property string $subsystem
 * @property string $description
 * @property array|null $detail
 * @property string $event_uuid
 * @property \Cake\I18n\FrozenTime $when_occurred
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class DomainEvent extends Entity
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
        'id_of_source' => true,
        'source_table' => true,
        'action' => true,
        'subsystem' => true,
        'description' => true,
        'detail' => true,
        'event_uuid' => true,
        'when_occurred' => true,
        'created' => true,
        'modified' => true,
    ];

	public const FIELD_ID = 'id';
	public const FIELD_ID_OF_SOURCE = 'id_of_source';
	public const FIELD_SOURCE_TABLE = 'source_table';
	public const FIELD_ACTION = 'action';
	public const FIELD_SUBSYSTEM = 'subsystem';
	public const FIELD_DESCRIPTION = 'description';
	public const FIELD_DETAIL = 'detail';
	public const FIELD_EVENT_UUID = 'event_uuid';
	public const FIELD_WHEN_OCCURRED = 'when_occurred';
	public const FIELD_CREATED = 'created';
	public const FIELD_MODIFIED = 'modified';
}
