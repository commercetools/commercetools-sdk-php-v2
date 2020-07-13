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
 * @implements Builder<SimilarProductSearchRequestMeta>
 */
final class SimilarProductSearchRequestMetaBuilder implements Builder
{
    /**
     * @var null|SimilarityMeasures|SimilarityMeasuresBuilder
     */
    private $similarityMeasures;

    /**
     * <p>The SimilarityMeasures used in this search.</p>
     *
     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures()
    {
        return $this->similarityMeasures instanceof SimilarityMeasuresBuilder ? $this->similarityMeasures->build() : $this->similarityMeasures;
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
     * @return $this
     */
    public function withSimilarityMeasuresBuilder(?SimilarityMeasuresBuilder $similarityMeasures)
    {
        $this->similarityMeasures = $similarityMeasures;

        return $this;
    }

    public function build(): SimilarProductSearchRequestMeta
    {
        return new SimilarProductSearchRequestMetaModel(
            $this->similarityMeasures instanceof SimilarityMeasuresBuilder ? $this->similarityMeasures->build() : $this->similarityMeasures
        );
    }

    public static function of(): SimilarProductSearchRequestMetaBuilder
    {
        return new self();
    }
}
