<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductRemoveVariantAction extends ProductUpdateAction
{
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setId(?int $id): void;

    public function setSku(?string $sku): void;

    public function setStaged(?bool $staged): void;
}
