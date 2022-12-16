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
 * @implements Builder<AWSLambdaDestination>
 */
final class AWSLambdaDestinationBuilder implements Builder
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
     * <p>Amazon Resource Name (ARN) of the Lambda function in the format <code>arn:aws:lambda:&lt;region&gt;:&lt;accountid&gt;:function:&lt;functionName&gt;</code>. Use the format <code>arn:aws:lambda:&lt;region&gt;:&lt;accountid&gt;:function:&lt;functionName&gt;:&lt;functionAlias/version&gt;</code> to point to a specific version of the function.</p>
     *

     * @return null|string
     */
    public function getArn()
    {
        return $this->arn;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

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


    public function build(): AWSLambdaDestination
    {
        return new AWSLambdaDestinationModel(
            $this->arn,
            $this->accessKey,
            $this->accessSecret
        );
    }

    public static function of(): AWSLambdaDestinationBuilder
    {
        return new self();
    }
}
