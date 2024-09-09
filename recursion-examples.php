<?php

/**
 * Factorial is the product of all positive integers less than or equal to n.
 *
 * @param $n
 *   The number to calculate the factorial of.
 * @return int
 *   The factorial of n.
 */
function factorial($n): int {
  // Base case: factorial of 0 is 1
  if ($n == 0) {
    return 1;
  }
  // Recursive case: n * factorial of (n - 1)
  return $n * factorial($n - 1);
}

echo factorial(3);
echo "\n";

/**
 * How the factorial function works:
 *
 * factorial(3) = 3 * factorial(2) // 3 * 2 = 6
 * factorial(2) = 2 * factorial(1) // 2 * 1 = 2
 * factorial(1) = 1 * factorial(0) // 1 * 1 = 1
 * factorial(0) = 1 [base case] // 1 is the base case because 0! = 1
 *
 * But on stack:
 *
 * factorial(0) = 1
 * factorial(1) = 1 * 1 = 1
 * factorial(2) = 2 * 1 = 2
 * factorial(3) = 3 * 2 = 6
 *
 */