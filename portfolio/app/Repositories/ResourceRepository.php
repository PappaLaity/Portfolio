<?php

namespace App\Repositories;

abstract class ResourceRepository
{

    protected $model;

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getData()
    {
        return $this->model->get();
    }

    public function getNotDeletedData()
    {
        return $this->model->isNotDeleted()->get();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getNotDeletedById($id)
    {
        return $this->model->isNotDeleted()->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $model = $this->getById($id);
        $model->update($inputs);
        return $model;
    }

    public function destroy($id)
    {
        try {
            $this->getById($id)->delete();
            return true;
        } catch (QueryException $e) {
            return 'error';
        }
    }

    public function safeDestroy($id)
    {
        $element = $this->getById($id);
        $element->statut = 0;
        $element->save();
        return true;
    }

    public function getNb()
    {
        return $this->model->count();
    }

}
