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
 * @implements Builder<ReturnInfoAddedMessagePayload>
 */
final class ReturnInfoAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ReturnInfo|ReturnInfoBuilder
     */
    private $returnInfo;

    /**
     * <p>The <a href="ctp:api:type:ReturnInfo">ReturnInfo</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

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
     * @deprecated use withReturnInfo() instead
     * @return $this
     */
    public function withReturnInfoBuilder(?ReturnInfoBuilder $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    public function build(): ReturnInfoAddedMessagePayload
    {
        return new ReturnInfoAddedMessagePayloadModel(
            $this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo
        );
    }

    public static function of(): ReturnInfoAddedMessagePayloadBuilder
    {
        return new self();
    }
}
