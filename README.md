<h1>ChatMath
    <img src="https://github.com/XanderID/ChatMath/blob/main/assets/icon.png" height="64" width="64" align="left">
</h1>
<br>
The ChatMath Plugin is an essential tool for players who need to perform calculations directly within the game chat.

# How to Use
![How To Use](https://github.com/XanderID/ChatMath/blob/main/assets/how-to-use.gif)
Just use it in chat, for example: `1 + 1 is { 1 + 1 }` it will be changed automatically to `1 + 1 is 2`.

## Full Tutorial
Here's a complete tutorial using this plugin.

### Using Expression
Expression | Description | Example
--- | --- | ---
`+` | Adds two numbers together | `1 + 1`
`-` | Subtracts the second number from the first number | `1 - 1`
`*` | Multiplies two numbers | `1 * 1`
`/` | Divides the first number by the second number | `1 / 1`
`^` | Raises the first number to the power of the second number | `1 ^ 1`

### Using Function
Function | Description | Example
--- | --- | ---
`sin` | Calculates the sine of an angle (in radians) | `sin(5) + 1`
`cos` | Calculates the cosine of an angle (in radians) | `cos(5) + 1`
`tan` | Calculates the tangent of an angle (in radians) | `tan(5) + 1`
`cot` | Calculates the cotangent of an angle (in radians) | `cot(5) + 1`
`sind` | Calculates the sine of an angle (in degrees) | `sind(30) + 1`
`cosd` | Calculates the cosine of an angle (in degrees) | `cosd(30) + 1`
`tand` | Calculates the tangent of an angle (in degrees) | `tand(30) + 1`
`cotd` | Calculates the cotangent of an angle (in degrees) | `cotd(30) + 1`
`arcsin` | Calculates the arcsine (inverse sine) of a value | `arcsin(0.5) + 1`
`arccos` | Calculates the arccosine (inverse cosine) of a value | `arccos(0.5) + 1`
`arctan` | Calculates the arctangent (inverse tangent) of a value | `arctan(1) + 1`
`arccot` | Calculates the arccotangent (inverse cotangent) of a value | `arccot(1) + 1`
`exp` | Calculates the exponential function of a value (e^x) | `exp(2) + 1`
`log` | Calculates the natural logarithm (base e) of a value | `log(10) + 1`
`ln` | Another notation for natural logarithm | `ln(10) + 1`
`lg` | Calculates the base-10 logarithm of a value | `lg(10) + 1`
`sqrt` | Calculates the square root of a value | `sqrt(25) + 1`
`sinh` | Calculates the hyperbolic sine of a value | `sinh(5) + 1`
`cosh` | Calculates the hyperbolic cosine of a value | `cosh(5) + 1`
`tanh` | Calculates the hyperbolic tangent of a value | `tanh(5) + 1`
`coth` | Calculates the hyperbolic cotangent of a value | `coth(5) + 1`
`arsinh` | Calculates the inverse hyperbolic sine of a value | `arsinh(1) + 1`
`arcosh` | Calculates the inverse hyperbolic cosine of a value | `arcosh(1) + 1`
`artanh` | Calculates the inverse hyperbolic tangent of a value | `artanh(0.5) + 1`
`arcoth` | Calculates the inverse hyperbolic cotangent of a value | `arcoth(2) + 1`
`abs` | Calculates the absolute value of a number | `abs(-5) + 1`
`sgn` | Returns the sign of a number (-1, 0, or 1) | `sgn(-5) + 1`
`!` | Calculates the factorial of a number | `5! + 1`
`!!` | Calculates the double factorial of a number | `5!! + 1`
`round` | Rounds a number to the nearest integer | `round(5.5) + 1`
`floor` | Rounds a number down to the nearest integer | `floor(5.9) + 1`
`ceil` | Rounds a number up to the nearest integer | `ceil(5.1) + 1`

### Using Constant
Constant | Description | Example
--- | --- | ---
`pi` | Represents the mathematical constant π (approximately 3.14159) | `pi * 2`
`e` | Represents the mathematical constant e (approximately 2.71828) | `e ^ 2`
`nan` | Represents "Not-a-Number", used to denote an undefined or unrepresentable value | `0 / 0` results in `nan`
`inf` | Represents infinity, used to denote an infinitely large number | `1 / 0` results in `inf`

## Note
You can put all expressions, functions and constants together above the example: `{ 1 + 1 * floor(5.9) + pi }`

# Todo
- [ ] Toggle Replace Chat
- [ ] Help Command

# Additional Notes
- This Plugin using Library [Math Parser](https://github.com/mossadal/math-parser) by Mossadal
- Icons made by [Freepik - Flaticon](https://www.flaticon.com/free-icons/calculator)