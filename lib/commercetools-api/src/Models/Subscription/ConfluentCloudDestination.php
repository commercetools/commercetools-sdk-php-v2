<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ConfluentCloudDestination extends Destination
{
    public const FIELD_BOOTSTRAP_SERVER = 'bootstrapServer';
    public const FIELD_API_KEY = 'apiKey';
    public const FIELD_API_SECRET = 'apiSecret';
    public const FIELD_ACKS = 'acks';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_KEY = 'key';

    /**
     * <p>URL to the bootstrap server including the port number in the format <code>&lt;xxxxx&gt;.&lt;region&gt;.&lt;provider&gt;.confluent.cloud:9092</code>.</p>
     *

     * @return null|string
     */
    public function getBootstrapServer();

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getApiKey();

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getApiSecret();

    /**
     * <p>The Kafka <code>acks</code> value. Can be <code>&quot;0&quot;</code>, <code>&quot;1&quot;</code>, or <code>&quot;all&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getAcks();

    /**
     * <p>The name of the topic.</p>
     *

     * @return null|string
     */
    public function getTopic();

    /**
     * <p>The Kafka record key.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $bootstrapServer
     */
    public function setBootstrapServer(?string $bootstrapServer): void;

    /**
     * @param ?string $apiKey
     */
    public function setApiKey(?string $apiKey): void;

    /**
     * @param ?string $apiSecret
     */
    public function setApiSecret(?string $apiSecret): void;

    /**
     * @param ?string $acks
     */
    public function setAcks(?string $acks): void;

    /**
     * @param ?string $topic
     */
    public function setTopic(?string $topic): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
