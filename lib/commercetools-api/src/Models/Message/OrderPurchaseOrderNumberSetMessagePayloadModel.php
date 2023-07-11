<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderPurchaseOrderNumberSetMessagePayloadModel extends JsonObjectModel implements OrderPurchaseOrderNumberSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderPurchaseOrderNumberSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $purchaseOrderNumber;

    /**
     *
     * @var ?string
     */
    protected $oldPurchaseOrderNumber;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $purchaseOrderNumber = null,
        ?string $oldPurchaseOrderNumber = null,
        ?string $type = null
    ) {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        $this->oldPurchaseOrderNumber = $oldPurchaseOrderNumber;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetPurchaseOrderNumberAction">Set Purchase Order Number</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        if (is_null($this->purchaseOrderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PURCHASE_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->purchaseOrderNumber = (string) $data;
        }

        return $this->purchaseOrderNumber;
    }

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetPurchaseOrderNumberAction">Set Purchase Order Number</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldPurchaseOrderNumber()
    {
        if (is_null($this->oldPurchaseOrderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_PURCHASE_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->oldPurchaseOrderNumber = (string) $data;
        }

        return $this->oldPurchaseOrderNumber;
    }


    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * @param ?string $oldPurchaseOrderNumber
     */
    public function setOldPurchaseOrderNumber(?string $oldPurchaseOrderNumber): void
    {
        $this->oldPurchaseOrderNumber = $oldPurchaseOrderNumber;
    }
}
