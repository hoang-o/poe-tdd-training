<?php

namespace tp2;

use tp2\Person;
use tp2\Enterprise;

class HRDepartment
{
    public function __construct(Enterprise $entreprise)
    {
        // TO IMPLEMENT
    }

    /**
     * @throws \RuntimeException When the given person is already an employee
     */
    public function hire(Person $person)
    {
        // TO IMPLEMENT
    }

    /**
     * @throws \RuntimeException When the given person is not an employee
     */
    public function fire(Person $person)
    {
        // TO IMPLEMENT
    }

    /**
     * @return boolean
     */
    public function isEmployee(Person $person)
    {
        // TO IMPLEMENT
    }
}