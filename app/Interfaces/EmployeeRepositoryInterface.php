<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface EmployeeRepositoryInterface
{
    public function getAllEmployees(Request $request);
    public function getEmployeeById($employeeId);
    public function createEmployee(array $employeeDetails);
    public function updateEmployee($employeeId, array $newDetails);
    public function deleteEmployee($employeeId);
}