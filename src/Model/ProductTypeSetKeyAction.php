<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeSetKeyAction extends ProductTypeUpdateAction {
    protected $key;
    const DISCRIMINATOR_VALUE = 'setKey';

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                
}
