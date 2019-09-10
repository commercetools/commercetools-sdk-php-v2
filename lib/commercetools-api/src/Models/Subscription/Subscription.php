<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\LoggedResource;

interface Subscription extends LoggedResource
{
    const FIELD_CHANGES = 'changes';
    const FIELD_DESTINATION = 'destination';
    const FIELD_KEY = 'key';
    const FIELD_MESSAGES = 'messages';
    const FIELD_FORMAT = 'format';
    const FIELD_STATUS = 'status';

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @return null|Destination
     */
    public function getDestination();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat();

    /**
     * @return null|string
     */
    public function getStatus();

    public function setChanges(?ChangeSubscriptionCollection $changes): void;

    public function setDestination(?Destination $destination): void;

    public function setKey(?string $key): void;

    public function setMessages(?MessageSubscriptionCollection $messages): void;

    public function setFormat(?DeliveryFormat $format): void;

    public function setStatus(?string $status): void;
}
