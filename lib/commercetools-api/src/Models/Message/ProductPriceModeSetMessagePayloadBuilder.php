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
 * @implements Builder<ProductPriceModeSetMessagePayload>
 */
final class ProductPriceModeSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $to;

    /**
     * <p>The <a href="ctp:api:type:ProductPriceModeEnum">PriceMode</a> that was set.</p>
     *

     * @return null|string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param ?string $to
     * @return $this
     */
    public function withTo(?string $to)
    {
        $this->to = $to;

        return $this;
    }


    public function build(): ProductPriceModeSetMessagePayload
    {
        return new ProductPriceModeSetMessagePayloadModel(
            $this->to
        );
    }

    public static function of(): ProductPriceModeSetMessagePayloadBuilder
    {
        return new self();
    }
}
