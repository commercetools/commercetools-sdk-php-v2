<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;

final class ExtensionAWSLambdaDestinationModel extends JsonObjectModel implements ExtensionAWSLambdaDestination
{
    const DISCRIMINATOR_VALUE = 'AWSLambda';

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
    protected $arn;

    /**
     * @var ?string
     */
    protected $accessSecret;

    public function __construct(
        string $accessKey = null,
        string $arn = null,
        string $accessSecret = null
    ) {
        $this->accessKey = $accessKey;
        $this->arn = $arn;
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
            $data = $this->raw(ExtensionDestination::FIELD_TYPE);
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
            $data = $this->raw(ExtensionAWSLambdaDestination::FIELD_ACCESS_KEY);
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
    public function getArn()
    {
        if (is_null($this->arn)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionAWSLambdaDestination::FIELD_ARN);
            if (is_null($data)) {
                return null;
            }
            $this->arn = (string) $data;
        }

        return $this->arn;
    }

    /**
     * @return null|string
     */
    public function getAccessSecret()
    {
        if (is_null($this->accessSecret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionAWSLambdaDestination::FIELD_ACCESS_SECRET);
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

    public function setArn(?string $arn): void
    {
        $this->arn = $arn;
    }

    public function setAccessSecret(?string $accessSecret): void
    {
        $this->accessSecret = $accessSecret;
    }
}
