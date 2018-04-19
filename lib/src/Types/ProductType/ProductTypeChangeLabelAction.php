<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\Common\LocalizedString;

interface ProductTypeChangeLabelAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_LABEL = 'label';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return LocalizedString
     */
    public function getLabel();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label);

}
