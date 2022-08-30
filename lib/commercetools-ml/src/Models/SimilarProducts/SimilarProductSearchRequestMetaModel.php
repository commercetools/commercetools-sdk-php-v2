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
final class SimilarProductSearchRequestMetaModel extends JsonObjectModel implements SimilarProductSearchRequestMeta
{
    /**
     *
     * @var ?SimilarityMeasures
     */
    protected $similarityMeasures;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SimilarityMeasures $similarityMeasures = null
    ) {
        $this->similarityMeasures = $similarityMeasures;
    }

    /**
     * <p>The SimilarityMeasures used in this search.</p>
     *
     *
     * @return null|SimilarityMeasures
     */
    public function getSimilarityMeasures()
    {
        if (is_null($this->similarityMeasures)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SIMILARITY_MEASURES);
            if (is_null($data)) {
                return null;
            }

            $this->similarityMeasures = SimilarityMeasuresModel::of($data);
        }

        return $this->similarityMeasures;
    }


    /**
     * @param ?SimilarityMeasures $similarityMeasures
     */
    public function setSimilarityMeasures(?SimilarityMeasures $similarityMeasures): void
    {
        $this->similarityMeasures = $similarityMeasures;
    }
}
