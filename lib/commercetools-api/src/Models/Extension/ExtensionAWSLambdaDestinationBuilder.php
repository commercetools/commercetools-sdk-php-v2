<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionAWSLambdaDestination>
 */
final class ExtensionAWSLambdaDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $arn;

    /**
     * @var ?string
     */
    private $accessKey;

    /**
     * @var ?string
     */
    private $accessSecret;

    /**
     * @return null|string
     */
    public function getArn()
    {
        return $this->arn;
    }

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
     * @param ?string $arn
     * @return $this
     */
    public function withArn(?string $arn)
    {
        $this->arn = $arn;

        return $this;
    }

    /**
     * @param ?string $accessKey
     * @return $this
     */
    public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * @param ?string $accessSecret
     * @return $this
     */
    public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;

        return $this;
    }


    public function build(): ExtensionAWSLambdaDestination
    {
        return new ExtensionAWSLambdaDestinationModel(
            $this->arn,
            $this->accessKey,
            $this->accessSecret
        );
    }

    public static function of(): ExtensionAWSLambdaDestinationBuilder
    {
        return new self();
    }
}
