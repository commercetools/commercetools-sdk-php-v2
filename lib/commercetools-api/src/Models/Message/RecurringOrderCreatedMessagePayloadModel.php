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
final class RecurringOrderCreatedMessagePayloadModel extends JsonObjectModel implements RecurringOrderCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RecurringOrder
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurringOrder $order = null,
        ?string $type = null
    ) {
        $this->order = $order;
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
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was created.</p>
     *
     *
     * @return null|RecurringOrder
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = RecurringOrderModel::of($data);
        }

        return $this->order;
    }


    /**
     * @param ?RecurringOrder $order
     */
    public function setOrder(?RecurringOrder $order): void
    {
        $this->order = $order;
    }
}
