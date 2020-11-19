<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Pair\ContainsKey;

<<__EntryPoint>>
function basic_usage_main(): void {
  $p = Pair {'foo', -1.5};

  // Prints "true", since index 0 is the first value
  \var_dump($p->containsKey(0));

  // Prints "true", since index 1 is the second value
  \var_dump($p->containsKey(1));

  // Prints "false", since a Pair only has index 0 and index 1
  \var_dump($p->containsKey(2));
}
