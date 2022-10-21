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
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *

     * @return null|string
     */
    public function getAccessKey();

    /**
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *

     * @return null|string
     */
    public function getAccessSecret();

    /**

     * @return null|string
     */
    public function getTopicArn();

    /**
     * <p>Defines the method of authentication for the SNS topic.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode();

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

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
