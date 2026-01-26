<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraft;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountSetRecurringOrderScopeActionModel extends JsonObjectModel implements CartDiscountSetRecurringOrderScopeAction
{
    public const DISCRIMINATOR_VALUE = 'setRecurringOrderScope';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?RecurringOrderScopeDraft
     */
    protected $recurringOrderScope;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurringOrderScopeDraft $recurringOrderScope = null,
        ?string $action = null
    ) {
        $this->recurringOrderScope = $recurringOrderScope;
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
     * <p>Scope of the Cart Discount for Recurring Orders.</p>
     *
     *
     * @return null|RecurringOrderScopeDraft
     */
    public function getRecurringOrderScope()
    {
        if (is_null($this->recurringOrderScope)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRING_ORDER_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurringOrderScopeDraftModel::resolveDiscriminatorClass($data);
            $this->recurringOrderScope = $className::of($data);
        }

        return $this->recurringOrderScope;
    }


    /**
     * @param ?RecurringOrderScopeDraft $recurringOrderScope
     */
    public function setRecurringOrderScope(?RecurringOrderScopeDraft $recurringOrderScope): void
    {
        $this->recurringOrderScope = $recurringOrderScope;
    }
}
