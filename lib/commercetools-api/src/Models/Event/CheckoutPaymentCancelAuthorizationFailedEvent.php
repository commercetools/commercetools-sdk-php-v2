<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CheckoutPaymentCancelAuthorizationFailedEvent extends Event
{
    public const FIELD_DATA = 'data';

    /**

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>An object containing details of the payment authorization that could not be cancelled.</p>
     *

     * @return null|CheckoutMessagePaymentsPayloadBaseData
     */
    public function getData();

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?CheckoutMessagePaymentsPayloadBaseData $data
     */
    public function setData(?CheckoutMessagePaymentsPayloadBaseData $data): void;
}
