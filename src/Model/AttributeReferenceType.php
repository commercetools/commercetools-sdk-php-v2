<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeReferenceType extends AttributeType {
    protected $referenceTypeId;
    const DISCRIMINATOR_VALUE = 'reference';

    /**
     * @return string
     */
    public function getReferenceTypeId(): string
    {
        if (is_null($this->referenceTypeId)) {
            $value = $this->raw('referenceTypeId');
            if (!is_null($value)) {
                $this->referenceTypeId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->referenceTypeId;
    }
                
}
