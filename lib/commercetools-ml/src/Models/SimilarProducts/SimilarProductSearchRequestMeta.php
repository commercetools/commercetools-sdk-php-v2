<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SimilarProductSearchRequestMeta extends JsonObject
{
    public const FIELD_SIMILARITY_MEASURES = 'similarityMeasures';

    /**
     * <p>The SimilarityMeasures used in this search.</p>
     *

     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures();

    /**
     * @param ?SimilarityMeasures $similarityMeasures
     */
    public function setSimilarityMeasures(?SimilarityMeasures $similarityMeasures): void;
}
