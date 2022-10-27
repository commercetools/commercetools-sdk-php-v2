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
 * @implements Builder<SnsDestination>
 */
final class SnsDestinationBuilder implements Builder
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
    private $topicArn;

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
     * <p>Amazon Resource Name (ARN) of the topic.</p>
     *

     * @return null|string
     */
    public function getTopicArn()
    {
        return $this->topicArn;
    }

    /**
     * <p>Defines the method of authentication for the SNS topic.</p>
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
     * @param ?string $topicArn
     * @return $this
     */
    public function withTopicArn(?string $topicArn)
    {
        $this->topicArn = $topicArn;

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


    public function build(): SnsDestination
    {
        return new SnsDestinationModel(
            $this->accessKey,
            $this->accessSecret,
            $this->topicArn,
            $this->authenticationMode
        );
    }

    public static function of(): SnsDestinationBuilder
    {
        return new self();
    }
}
