<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\Reference;

interface Message extends LoggedResource
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';
    const FIELD_TYPE = 'type';
    const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * @return null|Reference
     */
    public function getResource();

    /**
     * @return null|int
     */
    public function getResourceVersion();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers();

    public function setSequenceNumber(?int $sequenceNumber): void;

    public function setResource(?Reference $resource): void;

    public function setResourceVersion(?int $resourceVersion): void;

    public function setType(?string $type): void;

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}
