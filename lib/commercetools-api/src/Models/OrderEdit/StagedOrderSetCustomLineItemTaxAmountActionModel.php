<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraftModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderSetCustomLineItemTaxAmountActionModel extends JsonObjectModel implements StagedOrderSetCustomLineItemTaxAmountAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomLineItemTaxAmount';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @var ?string
     */
    protected $customLineItemKey;

    /**
     *
     * @var ?ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customLineItemId = null,
        ?string $customLineItemKey = null,
        ?ExternalTaxAmountDraft $externalTaxAmount = null,
        ?string $action = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->customLineItemKey = $customLineItemKey;
        $this->externalTaxAmount = $externalTaxAmount;
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
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
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
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getCustomLineItemKey()
    {
        if (is_null($this->customLineItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemKey = (string) $data;
        }

        return $this->customLineItemKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *
     *
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxAmount = ExternalTaxAmountDraftModel::of($data);
        }

        return $this->externalTaxAmount;
    }


    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    /**
     * @param ?string $customLineItemKey
     */
    public function setCustomLineItemKey(?string $customLineItemKey): void
    {
        $this->customLineItemKey = $customLineItemKey;
    }

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     */
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void
    {
        $this->externalTaxAmount = $externalTaxAmount;
    }
}
