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
 * @implements Builder<PaymentMethodCustomTypeRemovedMessagePayload>
 */
final class PaymentMethodCustomTypeRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $oldTypeId;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getOldTypeId()
    {
        return $this->oldTypeId;
    }

    /**
     * @param ?string $oldTypeId
     * @return $this
     */
    public function withOldTypeId(?string $oldTypeId)
    {
        $this->oldTypeId = $oldTypeId;

        return $this;
    }


    public function build(): PaymentMethodCustomTypeRemovedMessagePayload
    {
        return new PaymentMethodCustomTypeRemovedMessagePayloadModel(
            $this->oldTypeId
        );
    }

    public static function of(): PaymentMethodCustomTypeRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
