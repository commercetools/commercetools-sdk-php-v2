<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderRemoveParcelFromDeliveryAction>
 */
final class OrderRemoveParcelFromDeliveryActionBuilder implements Builder
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
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }


    public function build(): OrderRemoveParcelFromDeliveryAction
    {
        return new OrderRemoveParcelFromDeliveryActionModel(
            $this->parcelId
        );
    }

    public static function of(): OrderRemoveParcelFromDeliveryActionBuilder
    {
        return new self();
    }
}
