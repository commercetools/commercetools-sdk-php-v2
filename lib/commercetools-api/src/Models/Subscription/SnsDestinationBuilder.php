<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

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
    private $topicArn;

    /**
     * @var ?string
     */
    private $accessSecret;

    /**
     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @return null|string
     */
    public function getTopicArn()
    {
        return $this->topicArn;
    }

    /**
     * @return null|string
     */
    public function getAccessSecret()
    {
        return $this->accessSecret;
    }

    /**
     * @return $this
     */
    public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTopicArn(?string $topicArn)
    {
        $this->topicArn = $topicArn;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;

        return $this;
    }

    public function build(): SnsDestination
    {
        return new SnsDestinationModel(
            $this->accessKey,
            $this->topicArn,
            $this->accessSecret
        );
    }

    public static function of(): SnsDestinationBuilder
    {
        return new self();
    }
}
