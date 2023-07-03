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

     * @var ?string
     */
    private $parcelKey;

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelKey()
    {
        return $this->parcelKey;
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

    /**
     * @param ?string $parcelKey
     * @return $this
     */
    public function withParcelKey(?string $parcelKey)
    {
        $this->parcelKey = $parcelKey;

        return $this;
    }


    public function build(): OrderRemoveParcelFromDeliveryAction
    {
        return new OrderRemoveParcelFromDeliveryActionModel(
            $this->parcelId,
            $this->parcelKey
        );
    }

    public static function of(): OrderRemoveParcelFromDeliveryActionBuilder
    {
        return new self();
    }
}
