<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductRemoveVariantAction extends ProductUpdateAction
{

    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';

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
