<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Vector\ToImmSet;

<<__EntryPoint>>
function basic_usage_main(): void {
  // This Vector contains repetitions of 'red' and 'blue'
  $v = Vector {'red', 'green', 'red', 'blue', 'red', 'yellow', 'blue'};

  $imm_set = $v->toImmSet();

  \var_dump($imm_set is \HH\ImmSet<_>);
  \var_dump($imm_set);
}
