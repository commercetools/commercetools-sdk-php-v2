<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AWSLambdaDestinationModel extends JsonObjectModel implements AWSLambdaDestination
{
    public const DISCRIMINATOR_VALUE = 'AWSLambda';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $arn;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $arn = null,
        ?string $accessKey = null,
        ?string $accessSecret = null,
        ?string $type = null
    ) {
        $this->arn = $arn;
        $this->accessKey = $accessKey;
        $this->accessSecret = $accessSecret;
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
     * <p>Amazon Resource Name (ARN) of the Lambda function in the format <code>arn:aws:lambda:&lt;region&gt;:&lt;accountid&gt;:function:&lt;functionName&gt;</code>.</p>
     *
     *
     * @return null|string
     */
    public function getArn()
    {
        if (is_null($this->arn)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ARN);
            if (is_null($data)) {
                return null;
            }
            $this->arn = (string) $data;
        }

        return $this->arn;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
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
     * <p>Partially hidden on retrieval for security reasons.</p>
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
     * @param ?string $arn
     */
    public function setArn(?string $arn): void
    {
        $this->arn = $arn;
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
}
