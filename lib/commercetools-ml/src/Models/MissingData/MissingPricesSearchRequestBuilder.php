<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<MissingPricesSearchRequest>
 */
final class MissingPricesSearchRequestBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var ?int
     */
    private $productSetLimit;

    /**

     * @var ?bool
     */
    private $includeVariants;

    /**

     * @var ?string
     */
    private $currencyCode;

    /**

     * @var ?bool
     */
    private $checkDate;

    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?array
     */
    private $productIds;

    /**

     * @var ?array
     */
    private $productTypeIds;

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Maximum number of products to scan.</p>
     *

     * @return null|int
     */
    public function getProductSetLimit()
    {
        return $this->productSetLimit;
    }

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *

     * @return null|bool
     */
    public function getIncludeVariants()
    {
        return $this->includeVariants;
    }

    /**
     * <p>If used, only checks if a product variant has a price in the provided currency code.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * <p>If true, checks if there are prices for the specified date range and time.</p>
     *

     * @return null|bool
     */
    public function getCheckDate()
    {
        return $this->checkDate;
    }

    /**
     * <p>Starting date of the range to check. If no value is given, checks prices valid at the time the search is initiated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Ending date of the range to check. If no value is given, it is equal to <code>validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with the <code>productTypeIds</code> filter.</p>
     *

     * @return null|array
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs. Cannot be applied in combination with the <code>productIds</code> filter.</p>
     *

     * @return null|array
     */
    public function getProductTypeIds()
    {
        return $this->productTypeIds;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?int $productSetLimit
     * @return $this
     */
    public function withProductSetLimit(?int $productSetLimit)
    {
        $this->productSetLimit = $productSetLimit;

        return $this;
    }

    /**
     * @param ?bool $includeVariants
     * @return $this
     */
    public function withIncludeVariants(?bool $includeVariants)
    {
        $this->includeVariants = $includeVariants;

        return $this;
    }

    /**
     * @param ?string $currencyCode
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @param ?bool $checkDate
     * @return $this
     */
    public function withCheckDate(?bool $checkDate)
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?array $productIds
     * @return $this
     */
    public function withProductIds(?array $productIds)
    {
        $this->productIds = $productIds;

        return $this;
    }

    /**
     * @param ?array $productTypeIds
     * @return $this
     */
    public function withProductTypeIds(?array $productTypeIds)
    {
        $this->productTypeIds = $productTypeIds;

        return $this;
    }


    public function build(): MissingPricesSearchRequest
    {
        return new MissingPricesSearchRequestModel(
            $this->limit,
            $this->offset,
            $this->staged,
            $this->productSetLimit,
            $this->includeVariants,
            $this->currencyCode,
            $this->checkDate,
            $this->validFrom,
            $this->validUntil,
            $this->productIds,
            $this->productTypeIds
        );
    }

    public static function of(): MissingPricesSearchRequestBuilder
    {
        return new self();
    }
}
