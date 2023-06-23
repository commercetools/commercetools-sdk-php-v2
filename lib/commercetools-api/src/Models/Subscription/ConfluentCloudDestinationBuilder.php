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
 * @implements Builder<ConfluentCloudDestination>
 */
final class ConfluentCloudDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $bootstrapServer;

    /**

     * @var ?string
     */
    private $apiKey;

    /**

     * @var ?string
     */
    private $apiSecret;

    /**

     * @var ?string
     */
    private $acks;

    /**

     * @var ?string
     */
    private $topic;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>URL to the bootstrap server including the port number in the format <code>&lt;xxxxx&gt;.&lt;region&gt;.&lt;provider&gt;.confluent.cloud:9092</code>.</p>
     *

     * @return null|string
     */
    public function getBootstrapServer()
    {
        return $this->bootstrapServer;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * <p>The Kafka <code>acks</code> value.</p>
     *

     * @return null|string
     */
    public function getAcks()
    {
        return $this->acks;
    }

    /**
     * <p>The name of the topic.</p>
     *

     * @return null|string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * <p>The Kafka record key.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $bootstrapServer
     * @return $this
     */
    public function withBootstrapServer(?string $bootstrapServer)
    {
        $this->bootstrapServer = $bootstrapServer;

        return $this;
    }

    /**
     * @param ?string $apiKey
     * @return $this
     */
    public function withApiKey(?string $apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @param ?string $apiSecret
     * @return $this
     */
    public function withApiSecret(?string $apiSecret)
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * @param ?string $acks
     * @return $this
     */
    public function withAcks(?string $acks)
    {
        $this->acks = $acks;

        return $this;
    }

    /**
     * @param ?string $topic
     * @return $this
     */
    public function withTopic(?string $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ConfluentCloudDestination
    {
        return new ConfluentCloudDestinationModel(
            $this->bootstrapServer,
            $this->apiKey,
            $this->apiSecret,
            $this->acks,
            $this->topic,
            $this->key
        );
    }

    public static function of(): ConfluentCloudDestinationBuilder
    {
        return new self();
    }
}
