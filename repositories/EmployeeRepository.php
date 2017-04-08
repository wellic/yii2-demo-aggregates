<?php

namespace app\repositories;

use app\entities\Employee\Employee;
use app\entities\Employee\EmployeeId;

interface EmployeeRepository
{
    /**
     * @param EmployeeId $id
     * @return Employee
     * @throws NotFoundException
     */
    public function get(EmployeeId $id);

    /**
     * @param Employee $employee
     */
    public function add(Employee $employee);

    /**
     * @param Employee $employee
     */
    public function save(Employee $employee);

    /**
     * @param Employee $employee
     */
    public function remove(Employee $employee);

    /**
     * @return EmployeeId
     */
    public function nextId();
}