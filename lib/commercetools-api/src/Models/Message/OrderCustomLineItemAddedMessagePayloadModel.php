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
final class OrderCustomLineItemAddedMessagePayloadModel extends JsonObjectModel implements OrderCustomLineItemAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomLineItemAdded';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?CustomLineItem
     */
    protected $customLineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomLineItem $customLineItem = null
    ) {
        $this->customLineItem = $customLineItem;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
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
     * @param ?CustomLineItem $customLineItem
     */
    public function setCustomLineItem(?CustomLineItem $customLineItem): void
    {
        $this->customLineItem = $customLineItem;
    }
}
