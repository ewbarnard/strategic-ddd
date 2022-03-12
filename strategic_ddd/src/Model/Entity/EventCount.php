<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventCount Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $when
 * @property int $event_count
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class EventCount extends Entity
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
        'when' => true,
        'event_count' => true,
        'created' => true,
        'modified' => true,
    ];

	public const FIELD_ID = 'id';
	public const FIELD_WHEN = 'when';
	public const FIELD_EVENT_COUNT = 'event_count';
	public const FIELD_CREATED = 'created';
	public const FIELD_MODIFIED = 'modified';
}
