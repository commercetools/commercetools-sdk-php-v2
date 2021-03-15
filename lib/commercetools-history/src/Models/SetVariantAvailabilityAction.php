<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetVariantAvailabilityAction extends Action
{

    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setVariantAvailability</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getCatalogData();

    /**
     * @return null|string
     */
    public function getVariant();

    /**
     * @return null|ProductVariantAvailability
     */
    public function getPreviousValue();

    /**
     * @return null|ProductVariantAvailability
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;

    /**
     * @param ?ProductVariantAvailability $previousValue
     */
    public function setPreviousValue(?ProductVariantAvailability $previousValue): void;

    /**
     * @param ?ProductVariantAvailability $nextValue
     */
    public function setNextValue(?ProductVariantAvailability $nextValue): void;
}
