<?php namespace App\Components\Memorials\Repositories;

use App\Components\Memorials\Models\PhotoComment;
use App\Repositories\EloquentBaseRepository;
use Illuminate\Auth\Guard;

class EloquentPhotoCommentRepository extends EloquentBaseRepository implements PhotoCommentRepository
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
    public function __construct(PhotoComment $item, Guard $user)
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
        $attributes['user_id'] = $this->user->user()->id;

        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @return static
     */
    public function update(array $attributes = array())
    {
        return $this->getElementById($attributes['id'])->update($attributes);
    }

    public function getCommentsChild($id)
    {
        return $this->model->where('parent_id', '=', $id)->count();
    }
}