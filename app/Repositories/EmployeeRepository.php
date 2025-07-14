<?php

namespace App\Repositories;

use App\Interfaces\EmployeeRepositoryInterface;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function getAllEmployees(Request $request)
    {
        return Employee::with('division')
            ->when($request->filled('name'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->name . '%');
            })
            ->when($request->filled('division_id'), function ($query) use ($request) {
                $query->where('division_id', $request->division_id);
            })
            ->paginate(10);
    }

    public function getEmployeeById($employeeId)
    {
        return Employee::findOrFail($employeeId);
    }

    public function createEmployee(array $employeeDetails)
    {
        if (isset($employeeDetails['image'])) {
            $employeeDetails['image'] = $employeeDetails['image']->store('employee-images', 'public');
        }
        return Employee::create($employeeDetails);
    }

    public function updateEmployee($employeeId, array $newDetails)
    {
        $employee = $this->getEmployeeById($employeeId);

        if (isset($newDetails['image'])) {
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }
            $newDetails['image'] = $newDetails['image']->store('employee-images', 'public');
        }

        return $employee->update($newDetails);
    }

    public function deleteEmployee($employeeId)
    {
        $employee = $this->getEmployeeById($employeeId);
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }
        return $employee->delete();
    }
}