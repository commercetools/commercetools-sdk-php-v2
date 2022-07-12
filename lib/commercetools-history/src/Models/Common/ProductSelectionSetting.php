<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSelectionSetting extends JsonObject
{

    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_ACTIVE = 'active';

    /**

     * @return null|Reference
     */
    public function getProductSelection();

    /**

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?Reference $productSelection
     */
    public function setProductSelection(?Reference $productSelection): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
