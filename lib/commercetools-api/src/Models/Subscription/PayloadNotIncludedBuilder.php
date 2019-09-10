<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

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

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
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
