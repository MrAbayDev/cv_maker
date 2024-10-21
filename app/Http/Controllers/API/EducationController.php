<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Education::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $education = Education::query()->create([
            'student_id' => $request['student_id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);

        return response()->json([
            'message' => 'Education created successfully.',
            'status_code' => 'success',
            'education' => $education
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id ): \Illuminate\Http\JsonResponse
    {
        $education = Education::query()->findOrFail($id);
        $education->update([
            'student_id' => $request['student_id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);
        return response()->json([
            'message' => 'Education updated successfully.',
            'status_code' => 'success',
            'education' => $education
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $education = Education::query()->findOrFail($id);
        $education->delete();
        return response()->json([
            'message' => 'Education deleted successfully.',
            'status_code' => 'success',
            'education' => $education
        ]);
    }
}
