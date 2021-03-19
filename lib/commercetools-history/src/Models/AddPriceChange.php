<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddPriceChange extends Change
{

    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for adding prices</p>
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
    public function getPriceId();

    /**
     * @return null|Price
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
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?Price $nextValue
     */
    public function setNextValue(?Price $nextValue): void;
}
