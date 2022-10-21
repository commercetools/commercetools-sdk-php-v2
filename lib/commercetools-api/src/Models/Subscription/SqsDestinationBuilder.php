<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SqsDestination>
 */
final class SqsDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $accessKey;

    /**

     * @var ?string
     */
    private $accessSecret;

    /**

     * @var ?string
     */
    private $queueUrl;

    /**

     * @var ?string
     */
    private $region;

    /**

     * @var ?string
     */
    private $authenticationMode;

    /**
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *

     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *

     * @return null|string
     */
    public function getAccessSecret()
    {
        return $this->accessSecret;
    }

    /**

     * @return null|string
     */
    public function getQueueUrl()
    {
        return $this->queueUrl;
    }

    /**

     * @return null|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <p>Defines the method of authentication for the SQS queue.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
    }

    /**
     * @param ?string $accessKey
     * @return $this
     */
    public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * @param ?string $accessSecret
     * @return $this
     */
    public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;

        return $this;
    }

    /**
     * @param ?string $queueUrl
     * @return $this
     */
    public function withQueueUrl(?string $queueUrl)
    {
        $this->queueUrl = $queueUrl;

        return $this;
    }

    /**
     * @param ?string $region
     * @return $this
     */
    public function withRegion(?string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param ?string $authenticationMode
     * @return $this
     */
    public function withAuthenticationMode(?string $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;

        return $this;
    }


    public function build(): SqsDestination
    {
        return new SqsDestinationModel(
            $this->accessKey,
            $this->accessSecret,
            $this->queueUrl,
            $this->region,
            $this->authenticationMode
        );
    }

    public static function of(): SqsDestinationBuilder
    {
        return new self();
    }
}
