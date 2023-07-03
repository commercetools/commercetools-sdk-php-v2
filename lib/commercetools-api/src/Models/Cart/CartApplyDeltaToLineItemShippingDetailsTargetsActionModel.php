<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartApplyDeltaToLineItemShippingDetailsTargetsActionModel extends JsonObjectModel implements CartApplyDeltaToLineItemShippingDetailsTargetsAction
{
    public const DISCRIMINATOR_VALUE = 'applyDeltaToLineItemShippingDetailsTargets';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?string
     */
    protected $lineItemKey;

    /**
     *
     * @var ?ItemShippingTargetCollection
     */
    protected $targetsDelta;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?ItemShippingTargetCollection $targetsDelta = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
        $this->targetsDelta = $targetsDelta;
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
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemKey()
    {
        if (is_null($this->lineItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemKey = (string) $data;
        }

        return $this->lineItemKey;
    }

    /**
     * <p>Using positive or negative quantities increases or decreases the number of items shipped to an address.</p>
     *
     *
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        if (is_null($this->targetsDelta)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TARGETS_DELTA);
            if (is_null($data)) {
                return null;
            }
            $this->targetsDelta = ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targetsDelta;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?string $lineItemKey
     */
    public function setLineItemKey(?string $lineItemKey): void
    {
        $this->lineItemKey = $lineItemKey;
    }

    /**
     * @param ?ItemShippingTargetCollection $targetsDelta
     */
    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void
    {
        $this->targetsDelta = $targetsDelta;
    }
}
