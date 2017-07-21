# PHP Assesment

Instructions:

1. Clone this repositoy to your `~/vagrant-lamp` directory

        git clone git@github.com:CodeupClassroom/quincy-php-assesment.git ~/vagrant-lamp/php-assesment

1. Create a branch named `first-last` where `first` is your first name and `last` is your lastname

1. Write your solutions to the problems presented below inside `assesment.php`.

1. Add, commit, and push to your branch

Make sure you are running your php file from your vagrant box, **not** from your mac. The code will be run and graded on the same vagrant box we all have setup.

You will be graded on:

- Does your code solve the described problem?

    The sample inputs shown will be used to determine this, as well as other
    similiar inputs.

    Each problem will be awarded 2 points if the function accepts the correct
    inputs and produces the correct outputs, no points will be awarded if it
    does not.

- Did you follow the instructions precisely?

    - Did you create a gist?
    - Did you send instructors@codeup a link to the gist with prescribed subject line?

    If you did not do either of the above, your assesment cannot be graded and
    you will receive a 0.

    You will lose points one point per problem if the function is not named
    correctly.

Each problem provides sample inputs and outputs that you can use to test your
function.

## Problems

1. Write a function named `isNegative` that accepts a number and returns `true` or `false` based on whether the input is negative.

        isNegative(-1) // true
        isNegative(6) // false

1. Write a function named `average` that accepts an array of numbers and returns
   the average of those numbers

        average([1, 2, 3]) // 2
        average([4, 6, 8, 10, 12]) // 8

1. Write a function named `countOdds` that accepts an array of numbers and
   returns the number of odd numbers in the array.

        countOdds([1, 2, 3]) // 2
        countOdds([4, 6, 8, 10]) // 0
        countOdds([1, 2, 1, 1]) // 3

1. Write a function named `convertNameToAssociativeArray` that accepts a string that
   contains a first name and last name separated by a space, and returns an
   associative array with keys of `firstName` and `lastName`.

        convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
        convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']

1. Write a function named `fiveTo` that accepts a number and returns an array of
   the integers from 5 to (including) the passed number.

        fiveTo(10) // [5, 6, 7, 8, 9, 10]
        fiveTo(6) // [5, 6]
        fiveTo(5) // [5]
        fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]

1. Write a function named `upperCaseLastNames` that accepts an array of associative arrays
   where each associative array has indices `firstName` and `lastName` and returns the
   same array of associative arrays with each last name capitalized

        $names = [
            ['firstName' => 'Harry', 'lastName' => 'Potter'],
            ['firstName' => 'Ron', 'lastName' => 'weasley'],
            ['firstName' => 'Hermione', 'lastName' => 'granger],
        ];
        upperCaseLastNames(names);
        /*
        [
            ['firstName' => 'Harry', 'lastName' => 'Potter'],
            ['firstName' => 'Ron', 'lastName' => 'Weasley'],
            ['firstName' => 'Hermione', 'lastName' => 'Granger],
        ]
         */

## Tests

From your vagrant box, go into the `php-assesment` directory, and run

```
phpunit PHPAssesmentTests
```

This will run a series of tests on your code. Read all the messages in the
output carefully, they will tell you specifically what your function is expected
to output.
