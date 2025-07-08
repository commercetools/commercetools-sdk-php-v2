<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderPatchImportModel extends JsonObjectModel implements OrderPatchImport
{
    /**
     *
     * @var ?string
     */
    protected $orderNumber;

    /**
     *
     * @var ?OrderField
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderNumber = null,
        ?OrderField $fields = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->fields = $fields;
    }

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:Order">Order</a> with this <code>orderNumber</code> exists, it is updated with the imported data.</p>
     *
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * <p>Each field referenced must be defined in an existing <a href="ctp:api:type:Order">Order</a> or the <a href="ctp:import:type:ImportOperationState">ImportOperationState</a> is set to <code>validationFailed</code>.</p>
     *
     *
     * @return null|OrderField
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = OrderFieldModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?OrderField $fields
     */
    public function setFields(?OrderField $fields): void
    {
        $this->fields = $fields;
    }
}
