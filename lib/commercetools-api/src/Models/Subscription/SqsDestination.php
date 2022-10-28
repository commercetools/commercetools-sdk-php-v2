<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SqsDestination extends Destination
{
    public const FIELD_ACCESS_KEY = 'accessKey';
    public const FIELD_ACCESS_SECRET = 'accessSecret';
    public const FIELD_QUEUE_URL = 'queueUrl';
    public const FIELD_REGION = 'region';
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
     * <p>URL of the Amazon SQS queue.</p>
     *

     * @return null|string
     */
    public function getQueueUrl();

    /**
     * <p><a href="https://docs.aws.amazon.com/general/latest/gr/rande-manage.html">AWS Region</a> the message queue is located in.</p>
     *

     * @return null|string
     */
    public function getRegion();

    /**
     * <p>Defines the method of authentication for the SQS queue.</p>
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
     * @param ?string $queueUrl
     */
    public function setQueueUrl(?string $queueUrl): void;

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
