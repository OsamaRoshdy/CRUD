<?php


namespace App\Repository\Eloquent;


use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    protected $model;

    protected $module;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     * @param string $module
     */
    public function __construct(Model $model, string $module)
    {
        $this->module = $module;
        $this->model = $model;
    }

    public function find($id): ?Model
    {
        return $this->model->findOrFail($id);
    }
}
