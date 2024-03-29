<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListChangeTextLineItemsOrderActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemsOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeTextLineItemsOrder';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $textLineItemOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $textLineItemOrder = null,
        ?string $action = null
    ) {
        $this->textLineItemOrder = $textLineItemOrder;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Must contain all existing <a href="ctp:api:type:TextLineItem">TextLineItem</a> <code>id</code>s in the desired new order.</p>
     *
     *
     * @return null|array
     */
    public function getTextLineItemOrder()
    {
        if (is_null($this->textLineItemOrder)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEM_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemOrder = $data;
        }

        return $this->textLineItemOrder;
    }


    /**
     * @param ?array $textLineItemOrder
     */
    public function setTextLineItemOrder(?array $textLineItemOrder): void
    {
        $this->textLineItemOrder = $textLineItemOrder;
    }
}
