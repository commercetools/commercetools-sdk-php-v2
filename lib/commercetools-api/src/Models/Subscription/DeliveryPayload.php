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

     * @return null|string
     */
    public function getProjectKey();

    /**

     * @return null|string
     */
    public function getNotificationType();

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getResource();

    /**
     * <p>User-provided identifiers present on the resource for which the Message is created. The value of the identifier stored in the Message corresponds to the one that was set on the resource at the version shown in <code>resourceVersion</code>.</p>
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
