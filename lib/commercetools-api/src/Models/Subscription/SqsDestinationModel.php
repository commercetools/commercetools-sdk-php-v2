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
final class SqsDestinationModel extends JsonObjectModel implements SqsDestination
{
    public const DISCRIMINATOR_VALUE = 'SQS';
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
    protected $accessSecret;

    /**

     * @var ?string
     */
    protected $queueUrl;

    /**

     * @var ?string
     */
    protected $region;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $accessKey = null,
        ?string $accessSecret = null,
        ?string $queueUrl = null,
        ?string $region = null
    ) {
        $this->accessKey = $accessKey;
        $this->accessSecret = $accessSecret;
        $this->queueUrl = $queueUrl;
        $this->region = $region;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

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

     * @return null|string
     */
    public function getQueueUrl()
    {
        if (is_null($this->queueUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUEUE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->queueUrl = (string) $data;
        }

        return $this->queueUrl;
    }

    /**

     * @return null|string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REGION);
            if (is_null($data)) {
                return null;
            }
            $this->region = (string) $data;
        }

        return $this->region;
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
     * @param ?string $queueUrl
     */
    public function setQueueUrl(?string $queueUrl): void
    {
        $this->queueUrl = $queueUrl;
    }

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }
}
