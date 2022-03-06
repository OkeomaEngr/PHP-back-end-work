# PHP-back-end-work PART 1

An assignment work from school.
This question is designed to have you work with files, as well as string and array manipulation in PHP.

You should start with a simple form which contains a text area where the user can enter a string of text, a textbox for an optional search term, and a file upload field which allows them to upload a file which contains multiple lines of text (with the file each line should be treated as a separate string).

The user can enter a string and upload a file in the same submission of the form.

For each form submission, you will potentially have multiple sets of the output below, one for the string and one corresponding to each line in the file. It's important you semantically structure your HTML, and appropriately style your output to keep things readable.

On submission of the form, you should output following for each string/line in file:

The original string (formatted in a way to make it obvious it's the start of that output)
The number of commas in each string
The number of common punctuation characters in each string (for simplicity, we'll consider them to be characters with an ascii value between 32-47)

You could certainly accomplish this with regular expressions, but it can also be done fairy easily with basic php functions.
The string re-ordered so the words are in descending alphabetical order (irrespective of case).
The string as a proper title (first letter of each word capitalized, all others lower case).
The middle-third characters of the string. If the string isn't evenly divisible by three, you should take the lower of the two starting positions

Example: if the string is 15 characters long, you would output characters 6-10, if it's 16 or 17 characters, you would still output character 6-10
For the single string: if a search term is provided, output the string with the search term highlighted (by wrapping the term in a span with an appropriate class).
For the file upload:, if a search term is provided output only the strings that contain the search term (with the search term highlighted) and a count of the number of strings that did not have the term.
