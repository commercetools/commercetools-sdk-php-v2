<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\Common\LocalizedString;

interface ProductTypeSetInputTipAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_INPUT_TIP = 'inputTip';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return LocalizedString
     */
    public function getInputTip();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param LocalizedString $inputTip
     * @return $this
     */
    public function setInputTip(LocalizedString $inputTip);

}
