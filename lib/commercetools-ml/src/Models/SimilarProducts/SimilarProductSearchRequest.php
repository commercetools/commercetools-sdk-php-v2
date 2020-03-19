<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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
     * @return null|int
     */
    public function getLimit();

    /**
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
     * @return null|int
     */
    public function getConfidenceMin();

    /**
     * @return null|int
     */
    public function getConfidenceMax();

    public function setLimit(?int $limit): void;

    public function setOffset(?int $offset): void;

    public function setLanguage(?string $language): void;

    public function setCurrencyCode(?string $currencyCode): void;

    public function setSimilarityMeasures(?SimilarityMeasures $similarityMeasures): void;

    public function setProductSetSelectors(?ProductSetSelectorCollection $productSetSelectors): void;

    public function setConfidenceMin(?int $confidenceMin): void;

    public function setConfidenceMax(?int $confidenceMax): void;
}
