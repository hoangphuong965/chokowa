<?php

namespace App\Repositories\Nurse;

use App\Repositories\RepositoryInterface;

/**
 * Interface MyPageRepositoryInterface
 * @package App\Repositories\MyPage
 */
interface NurseRepositoryInterface extends RepositoryInterface
{
    public function nurseUpdate($id, $attributes = []);
}
