<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity
 *
 * @property string $id
 * @property string|null $organisation_id
 * @property string|null $contractor_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $message
 * @property bool $replied
 *
 * @property \App\Model\Entity\Organisation $organisation
 * @property \App\Model\Entity\Contractor $contractor
 */
class Enquiry extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'organisation_id' => true,
        'contractor_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone_number' => true,
        'message' => true,
        'replied' => false,
        'organisation' => true,
        'contractor' => true,
    ];
}
