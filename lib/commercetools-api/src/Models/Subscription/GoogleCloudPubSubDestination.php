<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface GoogleCloudPubSubDestination extends Destination
{

    public const FIELD_PROJECT_ID = 'projectId';
    public const FIELD_TOPIC = 'topic';

    /**
     * @return null|string
     */
    public function getProjectId();

    /**
     * @return null|string
     */
    public function getTopic();

    public function setProjectId(?string $projectId): void;

    public function setTopic(?string $topic): void;
}
