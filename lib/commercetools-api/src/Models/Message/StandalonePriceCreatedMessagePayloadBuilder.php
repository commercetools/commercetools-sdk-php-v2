<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceCreatedMessagePayload>
 */
final class StandalonePriceCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|StandalonePrice|StandalonePriceBuilder
     */
    private $standalonePrice;

    /**
     * <p>The Standalone Price as it was created.</p>
     *
     * @return null|StandalonePrice
     */
    public function getStandalonePrice()
    {
        return $this->standalonePrice instanceof StandalonePriceBuilder ? $this->standalonePrice->build() : $this->standalonePrice;
    }

    /**
     * @param ?StandalonePrice $standalonePrice
     * @return $this
     */
    public function withStandalonePrice(?StandalonePrice $standalonePrice)
    {
        $this->standalonePrice = $standalonePrice;

        return $this;
    }

    /**
     * @deprecated use withStandalonePrice() instead
     * @return $this
     */
    public function withStandalonePriceBuilder(?StandalonePriceBuilder $standalonePrice)
    {
        $this->standalonePrice = $standalonePrice;

        return $this;
    }

    public function build(): StandalonePriceCreatedMessagePayload
    {
        return new StandalonePriceCreatedMessagePayloadModel(
            $this->standalonePrice instanceof StandalonePriceBuilder ? $this->standalonePrice->build() : $this->standalonePrice
        );
    }

    public static function of(): StandalonePriceCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
