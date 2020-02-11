<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductTypeSetInputTipAction extends ProductTypeUpdateAction
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_INPUT_TIP = 'inputTip';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|LocalizedString
     */
    public function getInputTip();

    public function setAttributeName(?string $attributeName): void;

    public function setInputTip(?LocalizedString $inputTip): void;
}
