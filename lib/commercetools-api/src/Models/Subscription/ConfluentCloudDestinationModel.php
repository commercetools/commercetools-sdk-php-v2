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
final class ConfluentCloudDestinationModel extends JsonObjectModel implements ConfluentCloudDestination
{
    public const DISCRIMINATOR_VALUE = 'ConfluentCloud';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $bootstrapServer;

    /**
     *
     * @var ?string
     */
    protected $apiKey;

    /**
     *
     * @var ?string
     */
    protected $apiSecret;

    /**
     *
     * @var ?string
     */
    protected $acks;

    /**
     *
     * @var ?string
     */
    protected $topic;

    /**
     *
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $bootstrapServer = null,
        ?string $apiKey = null,
        ?string $apiSecret = null,
        ?string $acks = null,
        ?string $topic = null,
        ?string $key = null,
        ?string $type = null
    ) {
        $this->bootstrapServer = $bootstrapServer;
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->acks = $acks;
        $this->topic = $topic;
        $this->key = $key;
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
     * <p>URL to the bootstrap server including the port number in the format <code>&lt;xxxxx&gt;.&lt;region&gt;.&lt;provider&gt;.confluent.cloud:9092</code>.</p>
     *
     *
     * @return null|string
     */
    public function getBootstrapServer()
    {
        if (is_null($this->bootstrapServer)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_BOOTSTRAP_SERVER);
            if (is_null($data)) {
                return null;
            }
            $this->bootstrapServer = (string) $data;
        }

        return $this->bootstrapServer;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *
     *
     * @return null|string
     */
    public function getApiKey()
    {
        if (is_null($this->apiKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_API_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->apiKey = (string) $data;
        }

        return $this->apiKey;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *
     *
     * @return null|string
     */
    public function getApiSecret()
    {
        if (is_null($this->apiSecret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_API_SECRET);
            if (is_null($data)) {
                return null;
            }
            $this->apiSecret = (string) $data;
        }

        return $this->apiSecret;
    }

    /**
     * <p>The Kafka <code>acks</code> value.</p>
     *
     *
     * @return null|string
     */
    public function getAcks()
    {
        if (is_null($this->acks)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACKS);
            if (is_null($data)) {
                return null;
            }
            $this->acks = (string) $data;
        }

        return $this->acks;
    }

    /**
     * <p>The name of the topic.</p>
     *
     *
     * @return null|string
     */
    public function getTopic()
    {
        if (is_null($this->topic)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOPIC);
            if (is_null($data)) {
                return null;
            }
            $this->topic = (string) $data;
        }

        return $this->topic;
    }

    /**
     * <p>The Kafka record key.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }


    /**
     * @param ?string $bootstrapServer
     */
    public function setBootstrapServer(?string $bootstrapServer): void
    {
        $this->bootstrapServer = $bootstrapServer;
    }

    /**
     * @param ?string $apiKey
     */
    public function setApiKey(?string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param ?string $apiSecret
     */
    public function setApiSecret(?string $apiSecret): void
    {
        $this->apiSecret = $apiSecret;
    }

    /**
     * @param ?string $acks
     */
    public function setAcks(?string $acks): void
    {
        $this->acks = $acks;
    }

    /**
     * @param ?string $topic
     */
    public function setTopic(?string $topic): void
    {
        $this->topic = $topic;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
