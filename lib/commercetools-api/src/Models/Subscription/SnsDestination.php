<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $accessKey
     */
    public function setAccessKey(?string $accessKey): void;

    /**
     * @param ?string $accessSecret
     */
    public function setAccessSecret(?string $accessSecret): void;

    /**
     * @param ?string $topicArn
     */
    public function setTopicArn(?string $topicArn): void;
}
