<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAddressRemovedMessagePayload extends MessagePayload
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_ADDRESS_ROLES = 'addressRoles';

    /**
     * <p>The address that was removed from the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Indicates if the address was used for shipping or billing purposes.</p>
     *

     * @return null|array
     */
    public function getAddressRoles();

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?array $addressRoles
     */
    public function setAddressRoles(?array $addressRoles): void;
}
