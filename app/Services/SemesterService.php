<?php

namespace App\Services;

use App\Models\Semester;
class SemesterService
{
    public function getAll()
    {
        return Semester::all();
    }

    public function getById($id)
    {
        return Semester::findOrFail($id);
    }

    public function create(array $data)
    {
        return Semester::create($data);
    }

    public function update($id, array $data)
    {
        $semester = $this->getById($id);
        $semester->update($data);
        return $semester;
    }

    public function delete($id)
    {
        $semester = $this->getById($id);
        $semester->delete();
    }
}
