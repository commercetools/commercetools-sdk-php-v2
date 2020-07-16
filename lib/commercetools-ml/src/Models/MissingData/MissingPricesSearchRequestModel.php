<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class MissingPricesSearchRequestModel extends JsonObjectModel implements MissingPricesSearchRequest
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?int
     */
    protected $productSetLimit;

    /**
     * @var ?bool
     */
    protected $includeVariants;

    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     * @var ?bool
     */
    protected $checkDate;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?array
     */
    protected $productIds;

    /**
     * @var ?array
     */
    protected $productTypeIds;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $limit = null,
        ?int $offset = null,
        ?bool $staged = null,
        ?int $productSetLimit = null,
        ?bool $includeVariants = null,
        ?string $currencyCode = null,
        ?bool $checkDate = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?array $productIds = null,
        ?array $productTypeIds = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->staged = $staged;
        $this->productSetLimit = $productSetLimit;
        $this->includeVariants = $includeVariants;
        $this->currencyCode = $currencyCode;
        $this->checkDate = $checkDate;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->productIds = $productIds;
        $this->productTypeIds = $productTypeIds;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit()
    {
        if (is_null($this->productSetLimit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRODUCT_SET_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->productSetLimit = (int) $data;
        }

        return $this->productSetLimit;
    }

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants()
    {
        if (is_null($this->includeVariants)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INCLUDE_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->includeVariants = (bool) $data;
        }

        return $this->includeVariants;
    }

    /**
     * <p>If used, only checks if a product variant has a price in the provided currency code.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    /**
     * <p>If true, checks if there are prices for the specified date range and time.</p>
     *
     * @return null|bool
     */
    public function getCheckDate()
    {
        if (is_null($this->checkDate)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_CHECK_DATE);
            if (is_null($data)) {
                return null;
            }
            $this->checkDate = (bool) $data;
        }

        return $this->checkDate;
    }

    /**
     * <p>Starting date of the range to check. If no value is given, checks prices valid at the time the search is initiated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * <p>Ending date of the range to check. If no value is given, it is equal to <code>validFrom</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with the <code>productTypeIds</code> filter.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        if (is_null($this->productIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PRODUCT_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productIds = $data;
        }

        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs. Cannot be applied in combination with the <code>productIds</code> filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        if (is_null($this->productTypeIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productTypeIds = $data;
        }

        return $this->productTypeIds;
    }


    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?int $productSetLimit
     */
    public function setProductSetLimit(?int $productSetLimit): void
    {
        $this->productSetLimit = $productSetLimit;
    }

    /**
     * @param ?bool $includeVariants
     */
    public function setIncludeVariants(?bool $includeVariants): void
    {
        $this->includeVariants = $includeVariants;
    }

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @param ?bool $checkDate
     */
    public function setCheckDate(?bool $checkDate): void
    {
        $this->checkDate = $checkDate;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @param ?array $productIds
     */
    public function setProductIds(?array $productIds): void
    {
        $this->productIds = $productIds;
    }

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void
    {
        $this->productTypeIds = $productTypeIds;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[MissingPricesSearchRequest::FIELD_VALID_FROM]) && $data[MissingPricesSearchRequest::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[MissingPricesSearchRequest::FIELD_VALID_FROM] = $data[MissingPricesSearchRequest::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[MissingPricesSearchRequest::FIELD_VALID_UNTIL]) && $data[MissingPricesSearchRequest::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[MissingPricesSearchRequest::FIELD_VALID_UNTIL] = $data[MissingPricesSearchRequest::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
