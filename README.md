# PHP Foreach Pass-by-Reference Bug

This repository demonstrates a common pitfall in PHP when using pass-by-reference in `foreach` loops.  Modifying array elements within the loop directly alters the original array, which can be unexpected for developers unfamiliar with this behavior.

The `bug.php` file showcases the problematic code.  `bugSolution.php` offers a corrected version using a safer approach.  The issue stems from the `&` operator in the `foreach` loop, making `$value` a reference to the array element, not a copy.

**Key Takeaway:** Be mindful of pass-by-reference in PHP's `foreach` loop, especially when modifying array values.  For predictable behavior, copy values to a local variable before modification.