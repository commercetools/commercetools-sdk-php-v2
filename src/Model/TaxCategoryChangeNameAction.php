<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryChangeNameAction extends TaxCategoryUpdateAction {
    protected $name;
    const DISCRIMINATOR_VALUE = 'changeName';

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                
}
