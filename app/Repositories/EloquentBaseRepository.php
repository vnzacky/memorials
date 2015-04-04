<?php
namespace App\Repositories;

class EloquentBaseRepository implements BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $attributes = array())
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes = array())
    {
        return $this->model->update($attributes);
    }

    public function delete(){
        return $this->model->delete();
    }

    public function with($relations)
    {
        if (is_string($relations))
        {
            $relations = func_get_args();
        }

        $this->model = $this->model->with($relations);

        return $this;
    }

    public function getElementById($id)
    {
        $element = $this->model->find($id);
        if (is_null($element)) {
            throw new \Exception('Not found');
        }
        return $element;
    }
}