<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '9831c1c7-9803-4629-a72d-030ea7cca53a',
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'management_tool_link' => 'Lorem ipsum dolor sit amet',
                'due_date' => '2024-10-16 03:41:56',
                'last_checked' => '2024-10-16 03:41:56',
                'complete' => 1,
                'contractor_id' => '06502f7d-d1d9-4fa3-b21f-9e3a2dad0db2',
                'organisation_id' => '7d383883-6780-411f-b7da-b172072dca42',
            ],
        ];
        parent::init();
    }
}
