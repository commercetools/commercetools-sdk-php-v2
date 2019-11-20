<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartApplyDeltaToLineItemShippingDetailsTargetsActionModel extends JsonObjectModel implements CartApplyDeltaToLineItemShippingDetailsTargetsAction
{
    const DISCRIMINATOR_VALUE = 'applyDeltaToLineItemShippingDetailsTargets';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targetsDelta;

    public function __construct(
        string $lineItemId = null,
        ItemShippingTargetCollection $targetsDelta = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->targetsDelta = $targetsDelta;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartApplyDeltaToLineItemShippingDetailsTargetsAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        if (is_null($this->targetsDelta)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CartApplyDeltaToLineItemShippingDetailsTargetsAction::FIELD_TARGETS_DELTA);
            if (is_null($data)) {
                return null;
            }
            $this->targetsDelta = ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targetsDelta;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void
    {
        $this->targetsDelta = $targetsDelta;
    }
}
