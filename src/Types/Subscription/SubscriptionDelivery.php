<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Reference;
use Commercetools\Types;

interface SubscriptionDelivery extends JsonObject {
    const DISCRIMINATOR = 'notificationType';
    const SUB_TYPES = [
        'ResourceDeleted' => Types\Subscription\ResourceDeletedDelivery::class,
        'ResourceUpdated' => Types\Subscription\ResourceUpdatedDelivery::class,
        'Message' => Types\Subscription\MessageDelivery::class,
        'ResourceCreated' => Types\Subscription\ResourceCreatedDelivery::class,

    ];

    const FIELD_PROJECT_KEY = 'projectKey';
    const FIELD_NOTIFICATION_TYPE = 'notificationType';
    const FIELD_RESOURCE = 'resource';

    /**
     * @return string
     */
    public function getProjectKey();

    /**
     * @return string
     */
    public function getNotificationType();

    /**
     * @return Reference
     */
    public function getResource();

    /**
     * @param string $projectKey
     * @return $this
     */
    public function setProjectKey(string $projectKey);

    /**
     * @param string $notificationType
     * @return $this
     */
    public function setNotificationType(string $notificationType);

    /**
     * @param Reference $resource
     * @return $this
     */
    public function setResource(Reference $resource);

}
