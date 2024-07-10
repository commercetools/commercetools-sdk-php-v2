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
 * @implements Builder<CustomerAddressCustomTypeRemovedMessagePayload>
 */
final class CustomerAddressCustomTypeRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $previousTypeId;

    /**

     * @var ?string
     */
    private $addressId;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId()
    {
        return $this->previousTypeId;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> from which the Custom Type was removed.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param ?string $previousTypeId
     * @return $this
     */
    public function withPreviousTypeId(?string $previousTypeId)
    {
        $this->previousTypeId = $previousTypeId;

        return $this;
    }

    /**
     * @param ?string $addressId
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }


    public function build(): CustomerAddressCustomTypeRemovedMessagePayload
    {
        return new CustomerAddressCustomTypeRemovedMessagePayloadModel(
            $this->previousTypeId,
            $this->addressId
        );
    }

    public static function of(): CustomerAddressCustomTypeRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
