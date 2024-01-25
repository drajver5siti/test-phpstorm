<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SemesterService;
use App\Http\Controllers\Controller;
use App\Http\Requests\SemesterRequest;


class SemesterController extends Controller
{
    protected $semesterService;

    public function __construct(SemesterService $semesterService)
    {
        $this->semesterService = $semesterService;
    }

    public function getSemesterPage()
    {
        $semesters = $this->semesterService->getAll();
        return view('semester.list', compact('semesters'));
    }

    public function getAddSemesterPage()
    {
        return view('semester.create');
    }

    public function addSemester(SemesterRequest $request)
    {
        $validatedData = $request->validated();
        $this->semesterService->create($validatedData);
        return redirect('/semester');
    }

    public function getEditSemesterPage($id)
    {
        $semester = $this->semesterService->getById($id);
        return view('semester.create', compact('semester'));
    }

    public function editSemester(SemesterRequest $request, $id)
    {
        $this->semesterService->update($id, $request->validated());
        return redirect('/semester');
    }

    public function deleteSemester($id)
    {
        $this->semesterService->delete($id);
        return redirect('/semester');
    }
}
