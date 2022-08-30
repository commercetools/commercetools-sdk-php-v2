<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\CustomLineItem;
use Commercetools\Api\Models\Cart\CustomLineItemModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderCustomLineItemRemovedMessagePayloadModel extends JsonObjectModel implements OrderCustomLineItemRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomLineItemRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @var ?CustomLineItem
     */
    protected $customLineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customLineItemId = null,
        ?CustomLineItem $customLineItem = null,
        ?string $type = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->customLineItem = $customLineItem;
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
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|CustomLineItem
     */
    public function getCustomLineItem()
    {
        if (is_null($this->customLineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->customLineItem = CustomLineItemModel::of($data);
        }

        return $this->customLineItem;
    }


    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    /**
     * @param ?CustomLineItem $customLineItem
     */
    public function setCustomLineItem(?CustomLineItem $customLineItem): void
    {
        $this->customLineItem = $customLineItem;
    }
}
