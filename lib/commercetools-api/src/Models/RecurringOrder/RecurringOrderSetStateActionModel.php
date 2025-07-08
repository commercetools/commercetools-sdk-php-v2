<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderSetStateActionModel extends JsonObjectModel implements RecurringOrderSetStateAction
{
    public const DISCRIMINATOR_VALUE = 'setRecurringOrderState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?RecurringOrderStateDraft
     */
    protected $recurringOrderState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurringOrderStateDraft $recurringOrderState = null,
        ?string $action = null
    ) {
        $this->recurringOrderState = $recurringOrderState;
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
     * <p>New state of the RecurringOrder.</p>
     *
     *
     * @return null|RecurringOrderStateDraft
     */
    public function getRecurringOrderState()
    {
        if (is_null($this->recurringOrderState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRING_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurringOrderStateDraftModel::resolveDiscriminatorClass($data);
            $this->recurringOrderState = $className::of($data);
        }

        return $this->recurringOrderState;
    }


    /**
     * @param ?RecurringOrderStateDraft $recurringOrderState
     */
    public function setRecurringOrderState(?RecurringOrderStateDraft $recurringOrderState): void
    {
        $this->recurringOrderState = $recurringOrderState;
    }
}
