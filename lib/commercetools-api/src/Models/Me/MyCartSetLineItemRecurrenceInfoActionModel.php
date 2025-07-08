<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\RecurringOrder\LineItemRecurrenceInfoDraft;
use Commercetools\Api\Models\RecurringOrder\LineItemRecurrenceInfoDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartSetLineItemRecurrenceInfoActionModel extends JsonObjectModel implements MyCartSetLineItemRecurrenceInfoAction
{
    public const DISCRIMINATOR_VALUE = 'setLineItemRecurrenceInfo';
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
     * @var ?LineItemRecurrenceInfoDraft
     */
    protected $recurrenceInfo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?LineItemRecurrenceInfoDraft $recurrenceInfo = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
        $this->recurrenceInfo = $recurrenceInfo;
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
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *
     *
     * @return null|LineItemRecurrenceInfoDraft
     */
    public function getRecurrenceInfo()
    {
        if (is_null($this->recurrenceInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRENCE_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->recurrenceInfo = LineItemRecurrenceInfoDraftModel::of($data);
        }

        return $this->recurrenceInfo;
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
     * @param ?LineItemRecurrenceInfoDraft $recurrenceInfo
     */
    public function setRecurrenceInfo(?LineItemRecurrenceInfoDraft $recurrenceInfo): void
    {
        $this->recurrenceInfo = $recurrenceInfo;
    }
}
