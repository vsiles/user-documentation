<?hh

namespace Hack\UserDocumentation\Classes\BasicMethod;

class IntBox {
  public int $value = 0;
  
  public function get(): int {
    return $this->value;
  }
}
