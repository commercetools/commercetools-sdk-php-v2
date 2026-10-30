<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurrencePolicySetMinDaysBetweenOrdersActionModel extends JsonObjectModel implements RecurrencePolicySetMinDaysBetweenOrdersAction
{
    public const DISCRIMINATOR_VALUE = 'setMinDaysBetweenOrders';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $minDaysBetweenOrders;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $minDaysBetweenOrders = null,
        ?string $action = null
    ) {
        $this->minDaysBetweenOrders = $minDaysBetweenOrders;
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
     * <p>Value to set. Must be greater than <code>0</code>.
     * If omitted, any existing value is removed and there is no limit.</p>
     *
     *
     * @return null|int
     */
    public function getMinDaysBetweenOrders()
    {
        if (is_null($this->minDaysBetweenOrders)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MIN_DAYS_BETWEEN_ORDERS);
            if (is_null($data)) {
                return null;
            }
            $this->minDaysBetweenOrders = (int) $data;
        }

        return $this->minDaysBetweenOrders;
    }


    /**
     * @param ?int $minDaysBetweenOrders
     */
    public function setMinDaysBetweenOrders(?int $minDaysBetweenOrders): void
    {
        $this->minDaysBetweenOrders = $minDaysBetweenOrders;
    }
}
