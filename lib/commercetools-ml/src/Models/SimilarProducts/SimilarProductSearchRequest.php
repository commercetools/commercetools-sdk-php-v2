<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SimilarProductSearchRequest extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_CURRENCY_CODE = 'currencyCode';
    public const FIELD_SIMILARITY_MEASURES = 'similarityMeasures';
    public const FIELD_PRODUCT_SET_SELECTORS = 'productSetSelectors';
    public const FIELD_CONFIDENCE_MIN = 'confidenceMin';
    public const FIELD_CONFIDENCE_MAX = 'confidenceMax';

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
     * <p>language tag used to prioritize language for text comparisons.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**
     * <p>The three-digit  currency code to compare prices in. When a product has multiple prices, all prices for the product are converted to the currency provided by the currency attribute and the median price is calculated for comparison. Currencies are converted using the ECB currency exchange rates at the time the request is made. Of the currency codes, only currencies with currency exchange rates provided by the ECB are supported.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode();

    /**
     * <p><code>similarityMeasures</code> defines the attributes taken into account to measure product similarity.</p>
     *

     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures();

    /**
     * <p>Array of length 2 of ProductSetSelector</p>
     *

     * @return null|ProductSetSelectorCollection
     */
    public function getProductSetSelectors();

    /**

     * @return null|float
     */
    public function getConfidenceMin();

    /**

     * @return null|float
     */
    public function getConfidenceMax();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @param ?SimilarityMeasures $similarityMeasures
     */
    public function setSimilarityMeasures(?SimilarityMeasures $similarityMeasures): void;

    /**
     * @param ?ProductSetSelectorCollection $productSetSelectors
     */
    public function setProductSetSelectors(?ProductSetSelectorCollection $productSetSelectors): void;

    /**
     * @param ?float $confidenceMin
     */
    public function setConfidenceMin(?float $confidenceMin): void;

    /**
     * @param ?float $confidenceMax
     */
    public function setConfidenceMax(?float $confidenceMax): void;
}
