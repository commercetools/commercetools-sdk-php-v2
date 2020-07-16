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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderReturnInfoAddedMessagePayload>
 */
final class OrderReturnInfoAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|ReturnInfo|ReturnInfoBuilder
     */
    private $returnInfo;

    /**
     * @return null|ReturnInfo
     */
    public function getReturnInfo()
    {
        return $this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo;
    }

    /**
     * @param ?ReturnInfo $returnInfo
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
            $this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo
        );
    }

    public static function of(): OrderReturnInfoAddedMessagePayloadBuilder
    {
        return new self();
    }
}
