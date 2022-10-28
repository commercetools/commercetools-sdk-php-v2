<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GoogleCloudPubSubDestination extends Destination
{
    public const FIELD_PROJECT_ID = 'projectId';
    public const FIELD_TOPIC = 'topic';

    /**
     * <p>ID of the Google Cloud project that contains the Pub/Sub topic.</p>
     *

     * @return null|string
     */
    public function getProjectId();

    /**
     * <p>Name of the topic.</p>
     *

     * @return null|string
     */
    public function getTopic();

    /**
     * @param ?string $projectId
     */
    public function setProjectId(?string $projectId): void;

    /**
     * @param ?string $topic
     */
    public function setTopic(?string $topic): void;
}
