<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddressCustomFieldRemovedMessage extends Message
{
    public const FIELD_NAME = 'name';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>Name of the Custom Field that was removed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> from which the Custom Field was removed.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
