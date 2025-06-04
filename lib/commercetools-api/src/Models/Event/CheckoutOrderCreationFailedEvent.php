<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CheckoutOrderCreationFailedEvent extends Event
{
    public const FIELD_DATA = 'data';

    /**

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>An object containing details of the order which could not be created.</p>
     *

     * @return null|CheckoutMessageOrderPayloadBaseData
     */
    public function getData();

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?CheckoutMessageOrderPayloadBaseData $data
     */
    public function setData(?CheckoutMessageOrderPayloadBaseData $data): void;
}
