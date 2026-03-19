<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ProductVariantExclusion;
use Commercetools\History\Models\Common\ProductVariantExclusionModel;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceModel;

/**
 * @internal
 */
final class ExcludeProductChangeModel extends JsonObjectModel implements ExcludeProductChange
{

    public const DISCRIMINATOR_VALUE = 'ExcludeProductChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?ProductVariantExclusion
     */
    protected $variantExclusion;

    /**
     *
     * @var ?Reference
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ProductVariantExclusion $variantExclusion = null,
        ?Reference $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->variantExclusion = $variantExclusion;
        $this->nextValue = $nextValue;
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
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Only Product Variants with the explicitly listed SKUs are part of a Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
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
     * <p>Value after the change.</p>
     *
     *
     * @return null|Reference
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->nextValue = $className::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void
    {
        $this->variantExclusion = $variantExclusion;
    }

    /**
     * @param ?Reference $nextValue
     */
    public function setNextValue(?Reference $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
