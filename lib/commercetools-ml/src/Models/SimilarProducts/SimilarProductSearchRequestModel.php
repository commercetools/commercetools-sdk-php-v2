<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class SimilarProductSearchRequestModel extends JsonObjectModel implements SimilarProductSearchRequest
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
     * @var ?string
     */
    protected $language;

    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     * @var ?SimilarityMeasures
     */
    protected $similarityMeasures;

    /**
     * @var ?ProductSetSelectorCollection
     */
    protected $productSetSelectors;

    /**
     * @var ?int
     */
    protected $confidenceMin;

    /**
     * @var ?int
     */
    protected $confidenceMax;


    public function __construct(
        int $limit = null,
        int $offset = null,
        string $language = null,
        string $currencyCode = null,
        SimilarityMeasures $similarityMeasures = null,
        ProductSetSelectorCollection $productSetSelectors = null,
        int $confidenceMin = null,
        int $confidenceMax = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->language = $language;
        $this->currencyCode = $currencyCode;
        $this->similarityMeasures = $similarityMeasures;
        $this->productSetSelectors = $productSetSelectors;
        $this->confidenceMin = $confidenceMin;
        $this->confidenceMax = $confidenceMax;

    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_LIMIT);
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
            $data = $this->raw(SimilarProductSearchRequest::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>language tag used to prioritize language for text comparisons.</p>
     *
     * @return null|string
     */
    public function getLanguage()
    {
        if (is_null($this->language)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_LANGUAGE);
            if (is_null($data)) {
                return null;
            }
            $this->language = (string) $data;
        }

        return $this->language;
    }

    /**
     * <p>The three-digit  currency code to compare prices in. When a product has multiple prices, all prices for the product are converted to the currency provided by the currency attribute and the median price is calculated for comparison. Currencies are converted using the ECB currency exchange rates at the time the request is made. Of the currency codes, only currencies with currency exchange rates provided by the ECB are supported.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    /**
     * <p><code>similarityMeasures</code> defines the attributes taken into account to measure product similarity.</p>
     *
     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures()
    {
        if (is_null($this->similarityMeasures)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_SIMILARITY_MEASURES);
            if (is_null($data)) {
                return null;
            }

            $this->similarityMeasures = SimilarityMeasuresModel::of($data);
        }

        return $this->similarityMeasures;
    }

    /**
     * <p>Array of length 2 of ProductSetSelector</p>
     *
     * @return null|ProductSetSelectorCollection
     */
    public function getProductSetSelectors()
    {
        if (is_null($this->productSetSelectors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_PRODUCT_SET_SELECTORS);
            if (is_null($data)) {
                return null;
            }
            $this->productSetSelectors = ProductSetSelectorCollection::fromArray($data);
        }

        return $this->productSetSelectors;
    }

    /**
     * @return null|int
     */
    public function getConfidenceMin()
    {
        if (is_null($this->confidenceMin)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_CONFIDENCE_MIN);
            if (is_null($data)) {
                return null;
            }
            $this->confidenceMin = (int) $data;
        }

        return $this->confidenceMin;
    }

    /**
     * @return null|int
     */
    public function getConfidenceMax()
    {
        if (is_null($this->confidenceMax)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SimilarProductSearchRequest::FIELD_CONFIDENCE_MAX);
            if (is_null($data)) {
                return null;
            }
            $this->confidenceMax = (int) $data;
        }

        return $this->confidenceMax;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    public function setSimilarityMeasures(?SimilarityMeasures $similarityMeasures): void
    {
        $this->similarityMeasures = $similarityMeasures;
    }

    public function setProductSetSelectors(?ProductSetSelectorCollection $productSetSelectors): void
    {
        $this->productSetSelectors = $productSetSelectors;
    }

    public function setConfidenceMin(?int $confidenceMin): void
    {
        $this->confidenceMin = $confidenceMin;
    }

    public function setConfidenceMax(?int $confidenceMax): void
    {
        $this->confidenceMax = $confidenceMax;
    }



}
