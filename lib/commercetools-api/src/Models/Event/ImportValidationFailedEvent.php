<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportValidationFailedEvent extends Event
{
    public const FIELD_DATA = 'data';

    /**

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>An object containing details of the Import Operation with the <code>validationFailed</code> state.</p>
     *

     * @return null|ImportValidationFailedEventData
     */
    public function getData();

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?ImportValidationFailedEventData $data
     */
    public function setData(?ImportValidationFailedEventData $data): void;
}
