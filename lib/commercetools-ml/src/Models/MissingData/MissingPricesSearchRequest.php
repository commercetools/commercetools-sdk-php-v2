<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MissingPricesSearchRequest extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRODUCT_SET_LIMIT = 'productSetLimit';
    public const FIELD_INCLUDE_VARIANTS = 'includeVariants';
    public const FIELD_CURRENCY_CODE = 'currencyCode';
    public const FIELD_CHECK_DATE = 'checkDate';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_PRODUCT_IDS = 'productIds';
    public const FIELD_PRODUCT_TYPE_IDS = 'productTypeIds';

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Maximum number of products to scan.</p>
     *

     * @return null|int
     */
    public function getProductSetLimit();

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *

     * @return null|bool
     */
    public function getIncludeVariants();

    /**
     * <p>If used, only checks if a product variant has a price in the provided currency code.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode();

    /**
     * <p>If true, checks if there are prices for the specified date range and time.</p>
     *

     * @return null|bool
     */
    public function getCheckDate();

    /**
     * <p>Starting date of the range to check. If no value is given, checks prices valid at the time the search is initiated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Ending date of the range to check. If no value is given, it is equal to <code>validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with the <code>productTypeIds</code> filter.</p>
     *

     * @return null|array
     */
    public function getProductIds();

    /**
     * <p>Filters results by the provided product type IDs. Cannot be applied in combination with the <code>productIds</code> filter.</p>
     *

     * @return null|array
     */
    public function getProductTypeIds();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?int $productSetLimit
     */
    public function setProductSetLimit(?int $productSetLimit): void;

    /**
     * @param ?bool $includeVariants
     */
    public function setIncludeVariants(?bool $includeVariants): void;

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @param ?bool $checkDate
     */
    public function setCheckDate(?bool $checkDate): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?array $productIds
     */
    public function setProductIds(?array $productIds): void;

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void;
}
