<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObjectModel;

final class SnsDestinationModel extends JsonObjectModel implements SnsDestination
{
    const DISCRIMINATOR_VALUE = 'SNS';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $accessKey;

    /**
     * @var ?string
     */
    protected $topicArn;

    /**
     * @var ?string
     */
    protected $accessSecret;

    public function __construct(
        string $accessKey = null,
        string $topicArn = null,
        string $accessSecret = null
    ) {
        $this->accessKey = $accessKey;
        $this->topicArn = $topicArn;
        $this->accessSecret = $accessSecret;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Destination::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getAccessKey()
    {
        if (is_null($this->accessKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SnsDestination::FIELD_ACCESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->accessKey = (string) $data;
        }

        return $this->accessKey;
    }

    /**
     * @return null|string
     */
    public function getTopicArn()
    {
        if (is_null($this->topicArn)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SnsDestination::FIELD_TOPIC_ARN);
            if (is_null($data)) {
                return null;
            }
            $this->topicArn = (string) $data;
        }

        return $this->topicArn;
    }

    /**
     * @return null|string
     */
    public function getAccessSecret()
    {
        if (is_null($this->accessSecret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SnsDestination::FIELD_ACCESS_SECRET);
            if (is_null($data)) {
                return null;
            }
            $this->accessSecret = (string) $data;
        }

        return $this->accessSecret;
    }

    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function setTopicArn(?string $topicArn): void
    {
        $this->topicArn = $topicArn;
    }

    public function setAccessSecret(?string $accessSecret): void
    {
        $this->accessSecret = $accessSecret;
    }
}
