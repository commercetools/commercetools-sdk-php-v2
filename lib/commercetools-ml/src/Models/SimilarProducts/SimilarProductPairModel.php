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
final class SimilarProductPairModel extends JsonObjectModel implements SimilarProductPair
{
    /**
     * @var ?int
     */
    protected $confidence;

    /**
     * @var ?SimilarProductCollection
     */
    protected $products;


    public function __construct(
        int $confidence = null,
        SimilarProductCollection $products = null
    ) {
        $this->confidence = $confidence;
        $this->products = $products;
    }

    /**
     * <p>The probability of product similarity.</p>
     *
     * @return null|int
     */
    public function getConfidence()
    {
        if (is_null($this->confidence)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SimilarProductPair::FIELD_CONFIDENCE);
            if (is_null($data)) {
                return null;
            }
            $this->confidence = (int) $data;
        }

        return $this->confidence;
    }

    /**
     * @return null|SimilarProductCollection
     */
    public function getProducts()
    {
        if (is_null($this->products)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SimilarProductPair::FIELD_PRODUCTS);
            if (is_null($data)) {
                return null;
            }
            $this->products = SimilarProductCollection::fromArray($data);
        }

        return $this->products;
    }

    public function setConfidence(?int $confidence): void
    {
        $this->confidence = $confidence;
    }

    public function setProducts(?SimilarProductCollection $products): void
    {
        $this->products = $products;
    }
}
