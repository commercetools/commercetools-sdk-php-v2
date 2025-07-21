<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurringOrder\RecurringOrder;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderDeletedMessagePayloadModel extends JsonObjectModel implements RecurringOrderDeletedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderDeleted';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RecurringOrder
     */
    protected $recurringOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurringOrder $recurringOrder = null,
        ?string $type = null
    ) {
        $this->recurringOrder = $recurringOrder;
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
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was deleted.</p>
     *
     *
     * @return null|RecurringOrder
     */
    public function getRecurringOrder()
    {
        if (is_null($this->recurringOrder)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRING_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->recurringOrder = RecurringOrderModel::of($data);
        }

        return $this->recurringOrder;
    }


    /**
     * @param ?RecurringOrder $recurringOrder
     */
    public function setRecurringOrder(?RecurringOrder $recurringOrder): void
    {
        $this->recurringOrder = $recurringOrder;
    }
}
