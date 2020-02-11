<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderRemoveParcelFromDeliveryAction>
 */
final class StagedOrderRemoveParcelFromDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }


    public function build(): StagedOrderRemoveParcelFromDeliveryAction
    {
        return new StagedOrderRemoveParcelFromDeliveryActionModel(
            $this->parcelId
        );
    }

    public static function of(): StagedOrderRemoveParcelFromDeliveryActionBuilder
    {
        return new self();
    }
}
