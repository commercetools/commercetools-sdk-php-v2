<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'tax-category';

    /**
     * @return array
     */
    public function getObj(): array
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = $value;
            } else {
                return [];
            }
        }
        return $this->obj;
    }
                
}
