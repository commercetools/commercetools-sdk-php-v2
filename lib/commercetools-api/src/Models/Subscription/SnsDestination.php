<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SnsDestination extends Destination
{

    public const FIELD_ACCESS_KEY = 'accessKey';
    public const FIELD_ACCESS_SECRET = 'accessSecret';
    public const FIELD_TOPIC_ARN = 'topicArn';

    /**
     * @return null|string
     */
    public function getAccessKey();

    /**
     * @return null|string
     */
    public function getAccessSecret();

    /**
     * @return null|string
     */
    public function getTopicArn();

    public function setAccessKey(?string $accessKey): void;

    public function setAccessSecret(?string $accessSecret): void;

    public function setTopicArn(?string $topicArn): void;
}
