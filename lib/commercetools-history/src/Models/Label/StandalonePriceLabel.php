<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface StandalonePriceLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined unique identifier of the Standalone Price.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Unique Product SKU variant identifier to which the Standalone Price is associated.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;
}
