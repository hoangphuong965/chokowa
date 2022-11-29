<?php

namespace App\Repositories\Nurse;

use App\Models\Nurse;
use App\Repositories\BaseRepository;

/**
 * Class MyPageRepository
 * @package App\Repositories\MyPage
 */
class NurseRepository extends BaseRepository implements NurseRepositoryInterface
{
    /**
     * * Get the model
     * @return string
     */
    public function getModel()
    {
        return Nurse::class;
    }

    public function nurseUpdate($id, $attributes = [])
    {
        dd("updateNurse");
        // $this->getModel()::where('user_id', '=', $id)->update($attributes);
    }
}
