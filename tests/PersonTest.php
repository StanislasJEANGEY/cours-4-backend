<?php

namespace App\Tests;

use App\Entity\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSetName()
    {
        $person = new Person();
        $person->setName('John Doe');

        $this->assertEquals('John Doe', $person->getName());
    }

    public function testSetAge()
    {
        $person = new Person();
        $person->setAge(30);

        $this->assertEquals(30, $person->getAge());
    }
}