<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeIsSearchableAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $isSearchable;
    const DISCRIMINATOR_VALUE = 'changeIsSearchable';

    /**
     * @return string
     */
    public function getAttributeName(): string
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw('attributeName');
            if (!is_null($value)) {
                $this->attributeName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->attributeName;
    }
                

    /**
     * @return bool
     */
    public function getIsSearchable(): bool
    {
        if (is_null($this->isSearchable)) {
            $value = $this->raw('isSearchable');
            if (!is_null($value)) {
                $this->isSearchable = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isSearchable;
    }
                
}
