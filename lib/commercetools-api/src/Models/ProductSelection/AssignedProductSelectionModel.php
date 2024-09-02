<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class AssignedProductSelectionModel extends JsonObjectModel implements AssignedProductSelection
{
    /**
     *
     * @var ?ProductSelectionReference
     */
    protected $productSelection;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $variantSelection;

    /**
     *
     * @var ?ProductVariantExclusion
     */
    protected $variantExclusion;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionReference $productSelection = null,
        ?ProductVariantSelection $variantSelection = null,
        ?ProductVariantExclusion $variantExclusion = null,
        ?DateTimeImmutable $createdAt = null
    ) {
        $this->productSelection = $productSelection;
        $this->variantSelection = $variantSelection;
        $this->variantExclusion = $variantExclusion;
        $this->createdAt = $createdAt;
    }

    /**
     * <p>Reference to the Product Selection that this assignment is part of.</p>
     *
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionReferenceModel::of($data);
        }

        return $this->productSelection;
    }

    /**
     * <p>Defines which Variants of the Product will be included in the Product Selection.</p>
     * <p>This field is only available for assignments to a Product Selection with <code>Individual</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        if (is_null($this->variantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $className = ProductVariantSelectionModel::resolveDiscriminatorClass($data);
            $this->variantSelection = $className::of($data);
        }

        return $this->variantSelection;
    }

    /**
     * <p>Defines which Variants of the Product will be excluded from the Product Selection.</p>
     * <p>This field is only available for assignments to a Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *
     *
     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion()
    {
        if (is_null($this->variantExclusion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_EXCLUSION);
            if (is_null($data)) {
                return null;
            }

            $this->variantExclusion = ProductVariantExclusionModel::of($data);
        }

        return $this->variantExclusion;
    }

    /**
     * <p>Date and time (UTC) this assignment was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }


    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void
    {
        $this->productSelection = $productSelection;
    }

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void
    {
        $this->variantSelection = $variantSelection;
    }

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void
    {
        $this->variantExclusion = $variantExclusion;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[AssignedProductSelection::FIELD_CREATED_AT]) && $data[AssignedProductSelection::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[AssignedProductSelection::FIELD_CREATED_AT] = $data[AssignedProductSelection::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
