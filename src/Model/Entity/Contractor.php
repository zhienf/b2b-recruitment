<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contractor Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $email
 *
 * @property \App\Model\Entity\Enquiry[] $enquiries
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\Skill[] $skills
 */
class Contractor extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'phone_number' => true,
        'email' => true,
        'enquiries' => true,
        'projects' => true,
        'skills' => true,
    ];

    protected function _getContractorDescriptor(): string
    {
        // John Doe <john.doe@email.com>"
        return $this->first_name . ' ' . $this->last_name . ' <' . $this->email . '>';
    }
}
