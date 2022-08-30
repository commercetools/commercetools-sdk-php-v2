<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SnsDestinationModel extends JsonObjectModel implements SnsDestination
{
    public const DISCRIMINATOR_VALUE = 'SNS';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $accessKey;

    /**
     *
     * @var ?string
     */
    protected $accessSecret;

    /**
     *
     * @var ?string
     */
    protected $topicArn;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $accessKey = null,
        ?string $accessSecret = null,
        ?string $topicArn = null,
        ?string $type = null
    ) {
        $this->accessKey = $accessKey;
        $this->accessSecret = $accessSecret;
        $this->topicArn = $topicArn;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|string
     */
    public function getAccessKey()
    {
        if (is_null($this->accessKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACCESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->accessKey = (string) $data;
        }

        return $this->accessKey;
    }

    /**
     *
     * @return null|string
     */
    public function getAccessSecret()
    {
        if (is_null($this->accessSecret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACCESS_SECRET);
            if (is_null($data)) {
                return null;
            }
            $this->accessSecret = (string) $data;
        }

        return $this->accessSecret;
    }

    /**
     *
     * @return null|string
     */
    public function getTopicArn()
    {
        if (is_null($this->topicArn)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOPIC_ARN);
            if (is_null($data)) {
                return null;
            }
            $this->topicArn = (string) $data;
        }

        return $this->topicArn;
    }


    /**
     * @param ?string $accessKey
     */
    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    /**
     * @param ?string $accessSecret
     */
    public function setAccessSecret(?string $accessSecret): void
    {
        $this->accessSecret = $accessSecret;
    }

    /**
     * @param ?string $topicArn
     */
    public function setTopicArn(?string $topicArn): void
    {
        $this->topicArn = $topicArn;
    }
}
