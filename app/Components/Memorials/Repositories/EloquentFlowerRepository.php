<?php namespace App\Components\Memorials\Repositories;

use App\Components\Memorials\Models\Flower;
use App\Repositories\EloquentBaseRepository;
use Illuminate\Auth\Guard;

class EloquentFlowerRepository extends EloquentBaseRepository implements FlowerRepository
{
    /**
     * @var Memorial
     */
    protected $model;
    /**
     * @var Guard
     */
    protected $user;

    /**
     * @param Memorial $memorial
     * @param Guard $user
     */
    public function __construct(Flower $item, Guard $user)
    {
        $this->model = $item;
        $this->user = $user;
    }

    /**
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes = array())
    {
        //$attributes['created_by'] = $this->user->user()->id;

        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @return static
     */
    public function update(array $attributes = array())
    {
        if( !isset($attributes['state']) || empty($attributes['state'])) {
            $attributes['state'] = 0;
        }
        return $this->getElementById($attributes['id'])->update($attributes);
    }

    public function all_flowers()
    {
        $flowers = [];
        foreach($this->model->all(['id', 'title']) as $flower) {
            $flowers[$flower->id] = $flower->title;
        }
        return $flowers;
    }
}