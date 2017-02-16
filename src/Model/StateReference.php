<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'state';

    /**
     * @return State
     */
    public function getObj(): State
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, State::class);
            } else {
                return Mapper::map([], State::class);
            }
        }
        return $this->obj;
    }
                
}
