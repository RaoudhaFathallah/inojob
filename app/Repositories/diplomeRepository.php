<?php

namespace App\Repositories;

use App\Models\diplome;
use App\Repositories\BaseRepository;

/**
 * Class diplomeRepository
 * @package App\Repositories
 * @version October 6, 2021, 10:13 am UTC
*/

class diplomeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return diplome::class;
    }
}
