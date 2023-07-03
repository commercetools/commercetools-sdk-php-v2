<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceDeletedMessagePayload>
 */
final class StandalonePriceDeletedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the deleted Standalone Price was associated.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
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


    public function build(): StandalonePriceDeletedMessagePayload
    {
        return new StandalonePriceDeletedMessagePayloadModel(
            $this->sku
        );
    }

    public static function of(): StandalonePriceDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
