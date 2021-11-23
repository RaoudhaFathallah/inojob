<?php

namespace App\Repositories;

use App\Models\poste;
use App\Repositories\BaseRepository;

/**
 * Class posteRepository
 * @package App\Repositories
 * @version October 6, 2021, 10:19 am UTC
*/

class posteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return poste::class;
    }
}
