<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyShoppingListChangeLineItemsOrderActionModel extends JsonObjectModel implements MyShoppingListChangeLineItemsOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeLineItemsOrder';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $lineItemOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $lineItemOrder = null
    ) {
        $this->lineItemOrder = $lineItemOrder;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * @return null|array
     */
    public function getLineItemOrder()
    {
        if (is_null($this->lineItemOrder)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemOrder = $data;
        }

        return $this->lineItemOrder;
    }


    /**
     * @param ?array $lineItemOrder
     */
    public function setLineItemOrder(?array $lineItemOrder): void
    {
        $this->lineItemOrder = $lineItemOrder;
    }
}
