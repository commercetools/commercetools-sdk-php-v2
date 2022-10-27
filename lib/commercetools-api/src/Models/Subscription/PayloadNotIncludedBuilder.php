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
 * @implements Builder<PayloadNotIncluded>
 */
final class PayloadNotIncludedBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $reason;

    /**

     * @var ?string
     */
    private $payloadType;

    /**
     * <p>Reason the payload is not included. For example, the payload is too large, or its content is not supported by the Subscription destination.</p>
     *

     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * <p>Value of the <code>type</code> field in the original payload.</p>
     *

     * @return null|string
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * @param ?string $reason
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @param ?string $payloadType
     * @return $this
     */
    public function withPayloadType(?string $payloadType)
    {
        $this->payloadType = $payloadType;

        return $this;
    }


    public function build(): PayloadNotIncluded
    {
        return new PayloadNotIncludedModel(
            $this->reason,
            $this->payloadType
        );
    }

    public static function of(): PayloadNotIncludedBuilder
    {
        return new self();
    }
}
