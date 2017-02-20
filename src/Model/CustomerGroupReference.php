<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerGroupReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'customer-group';

    /**
     * @return CustomerGroup
     */
    public function getObj(): CustomerGroup
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, CustomerGroup::class);
            } else {
                return Mapper::map([], CustomerGroup::class);
            }
        }
        return $this->obj;
    }
                
}
