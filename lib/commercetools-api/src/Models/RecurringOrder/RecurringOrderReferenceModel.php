<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderReferenceModel extends JsonObjectModel implements RecurringOrderReference
{
    public const DISCRIMINATOR_VALUE = 'recurring-order';
    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?RecurringOrder
     */
    protected $obj;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?RecurringOrder $obj = null,
        ?string $typeId = null
    ) {
        $this->id = $id;
        $this->obj = $obj;
        $this->typeId = $typeId ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded RecurringOrder.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for RecurringOrders.</p>
     *
     *
     * @return null|RecurringOrder
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = RecurringOrderModel::of($data);
        }

        return $this->obj;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?RecurringOrder $obj
     */
    public function setObj(?RecurringOrder $obj): void
    {
        $this->obj = $obj;
    }
}
