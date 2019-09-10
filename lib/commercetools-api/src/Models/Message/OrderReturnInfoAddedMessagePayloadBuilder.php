<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfo;
use Commercetools\Api\Models\Order\ReturnInfoBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderReturnInfoAddedMessagePayload>
 */
final class OrderReturnInfoAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ReturnInfo|?ReturnInfoBuilder
     */
    private $returnInfo;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|ReturnInfo
     */
    public function getReturnInfo()
    {
        return $this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReturnInfo(?ReturnInfo $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReturnInfoBuilder(?ReturnInfoBuilder $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    public function build(): OrderReturnInfoAddedMessagePayload
    {
        return new OrderReturnInfoAddedMessagePayloadModel(
            $this->type,
            ($this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo)
        );
    }

    public static function of(): OrderReturnInfoAddedMessagePayloadBuilder
    {
        return new self();
    }
}
