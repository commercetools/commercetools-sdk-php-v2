<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeDescriptionAction extends ProductTypeUpdateAction {
    protected $description;
    const DISCRIMINATOR_VALUE = 'changeDescription';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->description;
    }
                
}
