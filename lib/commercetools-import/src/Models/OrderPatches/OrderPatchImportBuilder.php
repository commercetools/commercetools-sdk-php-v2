<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderPatchImport>
 */
final class OrderPatchImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderNumber;

    /**

     * @var null|OrderField|OrderFieldBuilder
     */
    private $fields;

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:Order">Order</a> with this <code>orderNumber</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * <p>Each field referenced must be defined in an existing <a href="ctp:api:type:Order">Order</a> or the <a href="ctp:import:type:ImportOperationState">ImportOperationState</a> is set to <code>validationFailed</code>.</p>
     *

     * @return null|OrderField
     */
    public function getFields()
    {
        return $this->fields instanceof OrderFieldBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @param ?OrderField $fields
     * @return $this
     */
    public function withFields(?OrderField $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @deprecated use withFields() instead
     * @return $this
     */
    public function withFieldsBuilder(?OrderFieldBuilder $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function build(): OrderPatchImport
    {
        return new OrderPatchImportModel(
            $this->orderNumber,
            $this->fields instanceof OrderFieldBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): OrderPatchImportBuilder
    {
        return new self();
    }
}
