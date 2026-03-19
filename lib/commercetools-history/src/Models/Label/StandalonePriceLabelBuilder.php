<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceLabel>
 */
final class StandalonePriceLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

    /**
     * <p>User-defined unique identifier of the Standalone Price.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Unique Product SKU variant identifier to which the Standalone Price is associated.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }


    public function build(): StandalonePriceLabel
    {
        return new StandalonePriceLabelModel(
            $this->key,
            $this->sku
        );
    }

    public static function of(): StandalonePriceLabelBuilder
    {
        return new self();
    }
}
