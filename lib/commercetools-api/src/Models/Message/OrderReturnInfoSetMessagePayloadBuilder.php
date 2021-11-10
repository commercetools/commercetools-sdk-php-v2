<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderReturnInfoSetMessagePayload>
 */
final class OrderReturnInfoSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?ReturnInfoCollection
     */
    private $returnInfo;

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * @param ?ReturnInfoCollection $returnInfo
     * @return $this
     */
    public function withReturnInfo(?ReturnInfoCollection $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }


    public function build(): OrderReturnInfoSetMessagePayload
    {
        return new OrderReturnInfoSetMessagePayloadModel(
            $this->returnInfo
        );
    }

    public static function of(): OrderReturnInfoSetMessagePayloadBuilder
    {
        return new self();
    }
}
