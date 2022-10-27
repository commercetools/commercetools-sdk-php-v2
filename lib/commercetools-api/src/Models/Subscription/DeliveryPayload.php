<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryPayload extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'notificationType';
    public const FIELD_PROJECT_KEY = 'projectKey';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a>.
     * Useful in message processing if the Destination receives events from multiple Projects.</p>
     *

     * @return null|string
     */
    public function getProjectKey();

    /**
     * <p>Identifies the payload.</p>
     *

     * @return null|string
     */
    public function getNotificationType();

    /**
     * <p>Reference to the resource that triggered the message.</p>
     *

     * @return null|Reference
     */
    public function getResource();

    /**
     * <p>User-defined unique identifiers of the resource.</p>
     *

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers();

    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}
