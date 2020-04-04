A method is a function associated with a class.

@@ methods-examples/method.php @@

Inside a method, `$this` refers to the current instance.

To call a method, use `->` or `?->`.

## Static Methods

A static method is not associated with a specific instance of a class.

To call a static method, use `::`.

`self::foo()`, `static::foo()`.

## Visibility

Methods may be private, protected or public.

Methods names must be unique. Hack does not support method overloading.

## Parent Methods
