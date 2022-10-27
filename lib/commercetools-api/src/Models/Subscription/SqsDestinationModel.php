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
    protected $queueUrl;

    /**
     *
     * @var ?string
     */
    protected $region;

    /**
     *
     * @var ?string
     */
    protected $authenticationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $accessKey = null,
        ?string $accessSecret = null,
        ?string $queueUrl = null,
        ?string $region = null,
        ?string $authenticationMode = null,
        ?string $type = null
    ) {
        $this->accessKey = $accessKey;
        $this->accessSecret = $accessSecret;
        $this->queueUrl = $queueUrl;
        $this->region = $region;
        $this->authenticationMode = $authenticationMode;
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
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *
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
     * <p>Only present if <code>authenticationMode</code> is set to <code>Credentials</code>.</p>
     *
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
     * <p>URL of the Amazon SQS queue.</p>
     *
     *
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
     * <p><a href="https://docs.aws.amazon.com/general/latest/gr/rande-manage.html">AWS Region</a> the message queue is located in.</p>
     *
     *
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
     * <p>Defines the method of authentication for the SQS queue.</p>
     *
     *
     * @return null|string
     */
    public function getAuthenticationMode()
    {
        if (is_null($this->authenticationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTHENTICATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->authenticationMode = (string) $data;
        }

        return $this->authenticationMode;
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

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void
    {
        $this->authenticationMode = $authenticationMode;
    }
}
