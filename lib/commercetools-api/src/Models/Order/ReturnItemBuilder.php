<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ReturnItem>
 */
final class ReturnItemBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?string
     */
    private $comment;

    /**

     * @var ?string
     */
    private $shipmentState;

    /**

     * @var ?string
     */
    private $paymentState;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * <p>Unique identifier of the Return Item.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Return Item.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Number of Line Items or Custom Line Items returned.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>User-defined description for the return.</p>
     *

     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <p>Shipment status of the Return Item.</p>
     *

     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * <p>Payment status of the Return Item:</p>
     * <ul>
     * <li><code>NonRefundable</code>, for items in the <code>Advised</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * <li><code>Initial</code>, for items in the <code>Returned</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * </ul>
     *

     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * <p>Custom Fields of the Return Item.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Date and time (UTC) the Return Item was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Date and time (UTC) the Return Item was intitially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?string $comment
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @param ?string $shipmentState
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    /**
     * @param ?string $paymentState
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ReturnItem
    {
        return new ReturnItemModel(
            $this->id,
            $this->key,
            $this->quantity,
            $this->comment,
            $this->shipmentState,
            $this->paymentState,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->lastModifiedAt,
            $this->createdAt
        );
    }

    public static function of(): ReturnItemBuilder
    {
        return new self();
    }
}
