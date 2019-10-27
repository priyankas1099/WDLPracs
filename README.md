# WDLPracs
Solutions to the WDL QB
JS has this problem. Every input you give in an input type "text" is treated as a string. Hence when the "+" operator is used it
concatenates the two strings, instead of adding two numbers. Eg:- "6" + "5" = "65" according to JS. (Expected result is 11).
However if you use other operands such as "-", "*", "/" JS treats the same strings as numbers. Eg:- "6" * "5" = "30" according to JS.
Therefore, we need to be careful whenever we are using the "+" operator as it may concatenate the two strings instead of adding them.
Hence, you will find in some places in my codes I have casted the inputs as "Number(var)" so it converts "6(string)" to "6(number)".
In some other places where I have not used the "+" operator I haven't performed this typecasting as JS understands they are numbers while
performing other operations. 
