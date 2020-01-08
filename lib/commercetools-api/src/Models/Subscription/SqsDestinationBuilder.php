<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

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
     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
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
    public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQueueUrl(?string $queueUrl)
    {
        $this->queueUrl = $queueUrl;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRegion(?string $region)
    {
        $this->region = $region;

        return $this;
    }

    public function build(): SqsDestination
    {
        return new SqsDestinationModel(
            $this->accessKey,
            $this->accessSecret,
            $this->queueUrl,
            $this->region
        );
    }

    public static function of(): SqsDestinationBuilder
    {
        return new self();
    }
}
