#tripcode
Generates tripcodes (non-secure) that match those generated on 4chan, guaranteed 100% accurate or your money back!

## reminder
Only the first 8 characters of the input affect the generated tripcode.

## some examples
* `a -> !ZnBI2EKkq.`
* `¥ -> !9xUxYS2dlM`
 * replaced with a single character (`\`)
* `\ -> !9xUxYS2dlM`
 * same as `¥`
* `» -> !cPUZU5OGFs`
 * would be transliterated to multiple characters (`>>`); instead replaced with a single `?`
* `? -> !cPUZU5OGFs`
 * same as `»`
* `& -> !MhCJJ7GVT.`
 * replaced with an HTML entity (`&amp;`)
* `&amp; -> !QfHq1EEpoQ`
 * the `&` is replaced and the rest remains, making the 9-character string `&amp;amp;`
