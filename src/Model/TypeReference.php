<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TypeReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'type';

    /**
     * @return Type
     */
    public function getObj(): Type
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Type::class);
            } else {
                return Mapper::map([], Type::class);
            }
        }
        return $this->obj;
    }
                
}
