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
 * @implements Builder<ReturnInfoSetMessagePayload>
 */
final class ReturnInfoSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ReturnInfoCollection
     */
    private $returnInfo;

    /**
     * <p>The <a href="ctp:api:type:ReturnInfo">ReturnInfo</a> that was set on the <a href="ctp:api:type:Order">Order</a> or <a href="ctp:api:type:OrderEdit">Order Edit</a>.</p>
     *

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


    public function build(): ReturnInfoSetMessagePayload
    {
        return new ReturnInfoSetMessagePayloadModel(
            $this->returnInfo
        );
    }

    public static function of(): ReturnInfoSetMessagePayloadBuilder
    {
        return new self();
    }
}
