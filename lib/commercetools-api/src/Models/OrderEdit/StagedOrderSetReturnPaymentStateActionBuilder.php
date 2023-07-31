<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetReturnPaymentStateAction>
 */
final class StagedOrderSetReturnPaymentStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $returnItemId;

    /**

     * @var ?string
     */
    private $returnItemKey;

    /**

     * @var ?string
     */
    private $paymentState;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemKey()
    {
        return $this->returnItemKey;
    }

    /**
     * <p>New Payment status of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @param ?string $returnItemId
     * @return $this
     */
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

        return $this;
    }

    /**
     * @param ?string $returnItemKey
     * @return $this
     */
    public function withReturnItemKey(?string $returnItemKey)
    {
        $this->returnItemKey = $returnItemKey;

        return $this;
    }

    /**
     * @param ?string $paymentState
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }


    public function build(): StagedOrderSetReturnPaymentStateAction
    {
        return new StagedOrderSetReturnPaymentStateActionModel(
            $this->returnItemId,
            $this->returnItemKey,
            $this->paymentState
        );
    }

    public static function of(): StagedOrderSetReturnPaymentStateActionBuilder
    {
        return new self();
    }
}
