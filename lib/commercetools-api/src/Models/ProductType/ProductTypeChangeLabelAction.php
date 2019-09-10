<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductTypeChangeLabelAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_LABEL = 'label';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getLabel();
    public function setAttributeName(?string $attributeName): void;
    
    public function setLabel(?LocalizedString $label): void;
}