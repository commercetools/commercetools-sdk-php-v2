<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartRecalculateAction extends MyCartUpdateAction
{
    public const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * @return null|bool
     */
    public function getUpdateProductData();

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
