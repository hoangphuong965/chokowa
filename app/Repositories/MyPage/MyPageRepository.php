<?php

namespace App\Repositories\MyPage;

use App\Models\Station;
use App\Repositories\BaseRepository;

/**
 * Class MyPageRepository
 * @package App\Repositories\MyPage
 */
class MyPageRepository extends BaseRepository implements MyPageRepositoryInterface
{
    /**
     * * Get the model
     * @return string
     */
    public function getModel()
    {
        return Station::class;
    }
}
