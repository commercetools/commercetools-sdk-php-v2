<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchMatchingVariant extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';

    /**
     * <p>Unique identifier of the variant.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>SKU of the matching variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;
}
