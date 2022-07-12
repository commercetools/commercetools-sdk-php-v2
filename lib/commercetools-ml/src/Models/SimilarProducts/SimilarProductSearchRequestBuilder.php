<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SimilarProductSearchRequest>
 */
final class SimilarProductSearchRequestBuilder implements Builder
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

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $currencyCode;

    /**

     * @var null|SimilarityMeasures|SimilarityMeasuresBuilder
     */
    private $similarityMeasures;

    /**

     * @var ?ProductSetSelectorCollection
     */
    private $productSetSelectors;

    /**

     * @var ?float
     */
    private $confidenceMin;

    /**

     * @var ?float
     */
    private $confidenceMax;

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
     * <p>language tag used to prioritize language for text comparisons.</p>
     *

     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <p>The three-digit  currency code to compare prices in. When a product has multiple prices, all prices for the product are converted to the currency provided by the currency attribute and the median price is calculated for comparison. Currencies are converted using the ECB currency exchange rates at the time the request is made. Of the currency codes, only currencies with currency exchange rates provided by the ECB are supported.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * <p><code>similarityMeasures</code> defines the attributes taken into account to measure product similarity.</p>
     *

     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures()
    {
        return $this->similarityMeasures instanceof SimilarityMeasuresBuilder ? $this->similarityMeasures->build() : $this->similarityMeasures;
    }

    /**
     * <p>Array of length 2 of ProductSetSelector</p>
     *

     * @return null|ProductSetSelectorCollection
     */
    public function getProductSetSelectors()
    {
        return $this->productSetSelectors;
    }

    /**

     * @return null|float
     */
    public function getConfidenceMin()
    {
        return $this->confidenceMin;
    }

    /**

     * @return null|float
     */
    public function getConfidenceMax()
    {
        return $this->confidenceMax;
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
     * @param ?string $language
     * @return $this
     */
    public function withLanguage(?string $language)
    {
        $this->language = $language;

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
     * @param ?SimilarityMeasures $similarityMeasures
     * @return $this
     */
    public function withSimilarityMeasures(?SimilarityMeasures $similarityMeasures)
    {
        $this->similarityMeasures = $similarityMeasures;

        return $this;
    }

    /**
     * @param ?ProductSetSelectorCollection $productSetSelectors
     * @return $this
     */
    public function withProductSetSelectors(?ProductSetSelectorCollection $productSetSelectors)
    {
        $this->productSetSelectors = $productSetSelectors;

        return $this;
    }

    /**
     * @param ?float $confidenceMin
     * @return $this
     */
    public function withConfidenceMin(?float $confidenceMin)
    {
        $this->confidenceMin = $confidenceMin;

        return $this;
    }

    /**
     * @param ?float $confidenceMax
     * @return $this
     */
    public function withConfidenceMax(?float $confidenceMax)
    {
        $this->confidenceMax = $confidenceMax;

        return $this;
    }

    /**
     * @deprecated use withSimilarityMeasures() instead
     * @return $this
     */
    public function withSimilarityMeasuresBuilder(?SimilarityMeasuresBuilder $similarityMeasures)
    {
        $this->similarityMeasures = $similarityMeasures;

        return $this;
    }

    public function build(): SimilarProductSearchRequest
    {
        return new SimilarProductSearchRequestModel(
            $this->limit,
            $this->offset,
            $this->language,
            $this->currencyCode,
            $this->similarityMeasures instanceof SimilarityMeasuresBuilder ? $this->similarityMeasures->build() : $this->similarityMeasures,
            $this->productSetSelectors,
            $this->confidenceMin,
            $this->confidenceMax
        );
    }

    public static function of(): SimilarProductSearchRequestBuilder
    {
        return new self();
    }
}
