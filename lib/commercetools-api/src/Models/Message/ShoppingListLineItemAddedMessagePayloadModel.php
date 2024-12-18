<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ShoppingList\ShoppingListLineItem;
use Commercetools\Api\Models\ShoppingList\ShoppingListLineItemModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListLineItemAddedMessagePayloadModel extends JsonObjectModel implements ShoppingListLineItemAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ShoppingListLineItemAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ShoppingListLineItem
     */
    protected $lineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShoppingListLineItem $lineItem = null,
        ?string $type = null
    ) {
        $this->lineItem = $lineItem;
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
     * <p><a href="ctp:api:type:ShoppingListLineItem">Line Item</a> that was added to the <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *
     *
     * @return null|ShoppingListLineItem
     */
    public function getLineItem()
    {
        if (is_null($this->lineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->lineItem = ShoppingListLineItemModel::of($data);
        }

        return $this->lineItem;
    }


    /**
     * @param ?ShoppingListLineItem $lineItem
     */
    public function setLineItem(?ShoppingListLineItem $lineItem): void
    {
        $this->lineItem = $lineItem;
    }
}
