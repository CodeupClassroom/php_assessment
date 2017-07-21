<?php

class PHPAssessmentTests extends PHPUnit_Framework_TestCase
{
    public function test_is_negative()
    {
        $this->assertTrue(
            function_exists('isNegative'), 
            "Expected isNegative() function to be present.");

        $this->assertTrue(
            is_bool(isNegative(12)), 
            "Expected isNegative to return a boolean");

        $this->assertTrue(
            is_bool(isNegative(-12)), 
            "Expected isNegative to return a boolean");

        $this->assertTrue(
            isNegative(-100), 
            "Expected isNegative(-10) to return true");

        $this->assertFalse(
            isNegative(123), 
            "Expected isNegative(123) to return false");

        $this->assertFalse(
            isNegative(0), 
            "Expected isNegative(0) to return false.");
    }

    public function test_average()
    {
        $this->assertTrue(
            function_exists('average'), 
            "Expected average() function to be present");

        $this->assertTrue(
            is_numeric(average([1, 2, 3])), 
            "Expected average() to return a numberic result");

        $this->assertEquals(
            1.5, average([1, 2]), 
            "Expected average([1, 2]) to equal 1.5");

        $this->assertEquals(
            2, average([1, 2, 3]), 
            "Expected average([1, 2, 3]) to equal 2");
    }

    public function test_count_odds()
    {
        $this->assertTrue(
            function_exists('countOdds'), 
            "Expected countOdds() function to be present.");

        $this->assertTrue(
            is_numeric(countOdds([1, 2, 3])), 
            "Expected countOdds() function to return a number.");

        $this->assertEquals(
            2, countOdds([1, 2, 3]), 
            "Expected countOdds[1, 2, 3] to equal 2.");

        $this->assertEquals(
            0, countOdds([0, 2, 4, 6]), 
            "Expected countOdds([0, 2, 4, 6]) to equal 0");
    }

    public function test_convert_name_to_associative_array()
    {
        $this->assertTrue(
            function_exists('convertNameToAssociativeArray'), 
            "Expected convertNameToAssociativeArray() function to be present.");

        $this->assertTrue(
            is_array(convertNameToAssociativeArray("Harry Potter")), 
            "Expected convertNameToAssociativeArray() to return an array");

        $this->assertArrayHasKey('firstName',
            convertNameToAssociativeArray('Harry Potter'), 
            "Expected the array returned by convertNameToAssociativeArray('Harry Potter') to have 'firstName' as a defined index.");

        $this->assertArrayHasKey('lastName',
            convertNameToAssociativeArray('Harry Potter'),
            "Expected the array returned by convertNameToAssociativeArray('Harry Potter') to have 'lastName' as a defined index.");

        $this->assertEquals(
            ['firstName' => 'Harry', 'lastName' => 'Potter'],
            convertNameToAssociativeArray('Harry Potter'),
            "Expected convertNameToAssociativeArray('Harray Potter' to equal ['firstName' => 'Harry', 'lastName' => 'Potter']");

        $this->assertEquals(
            ['firstName' => 'Hermione', 'lastName' => 'Granger'],
            convertNameToAssociativeArray('Hermione Granger'),
            "Expected convertNameToAssociativeArray('Harray Granger' to equal ['firstName' => 'Hermione', 'lastName' => 'Granger']");
    }

    public function test_five_to()
    {
        $this->assertTrue(
            function_exists('fiveTo'),
            "Expected fiveTo() function to exist.");

        $this->assertTrue(
            is_array(fiveTo(10)),
            "Expected fiveTo() to return an array.");

        $this->assertTrue(
            [5] === fiveTo(5),
            "Expected fiveTo(5) to equal [5]");

        $this->assertTrue(
            [5] === fiveTo(2),
            "Expected fiveTo(2) to equal [5]");

        $this->assertTrue(
            [5, 6, 7, 8, 9] === fiveTo(10),
            "Expected fiveTo(10) to equal [5, 6, 7, 8, 9]");       
    }

    public function test_upper_case_last_names()
    {
        $harry = ['firstName' => 'Harry', 'lastName' => 'potter'];
        $ron = ['firstName' => 'Ron', 'lastName' => 'weasley'];

        $this->assertTrue(
            function_exists('upperCaseLastNames'),
            "Expected upperCaseLastNames() function to exist");

        $this->assertTrue(
            is_array(upperCaseLastNames($harry)),
            "Expected upperCaseLastNames to return an array");

        $this->assertEquals(
            ['firstName' => 'Harry', 'lastName' => 'Potter'],
            upperCaseLastNames($harry),
            "Expected ['firstName' => 'Harry', 'lastName' => 'potter] to equal ['firstName' => 'Harry', 'lastName' => 'Potter']");

        $this->assertEquals(
            ['firstName' => 'Ron', 'lastName' => 'Weasley'],
            upperCaseLastNames($ron),
            "Expected ['firstName' => 'Ron', 'lastName' => 'weasley] to equal ['firstName' => 'Ron', 'lastName' => 'Weasley']");
    }
}
