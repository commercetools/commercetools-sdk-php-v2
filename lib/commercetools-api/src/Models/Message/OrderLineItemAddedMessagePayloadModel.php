<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\LineItem;
use Commercetools\Api\Models\Cart\LineItemModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemAddedMessagePayloadModel extends JsonObjectModel implements OrderLineItemAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?LineItem
     */
    protected $lineItem;

    /**
     *
     * @var ?int
     */
    protected $addedQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LineItem $lineItem = null,
        ?int $addedQuantity = null,
        ?string $type = null
    ) {
        $this->lineItem = $lineItem;
        $this->addedQuantity = $addedQuantity;
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
     * <p><a href="ctp:api:type:LineItem">Line Item</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|LineItem
     */
    public function getLineItem()
    {
        if (is_null($this->lineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->lineItem = LineItemModel::of($data);
        }

        return $this->lineItem;
    }

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|int
     */
    public function getAddedQuantity()
    {
        if (is_null($this->addedQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ADDED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->addedQuantity = (int) $data;
        }

        return $this->addedQuantity;
    }


    /**
     * @param ?LineItem $lineItem
     */
    public function setLineItem(?LineItem $lineItem): void
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @param ?int $addedQuantity
     */
    public function setAddedQuantity(?int $addedQuantity): void
    {
        $this->addedQuantity = $addedQuantity;
    }
}
