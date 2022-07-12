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

     * @var ?float
     */
    protected $confidence;

    /**

     * @var ?SimilarProductCollection
     */
    protected $products;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $confidence = null,
        ?SimilarProductCollection $products = null
    ) {
        $this->confidence = $confidence;
        $this->products = $products;
    }

    /**
     * <p>The probability of product similarity.</p>
     *

     * @return null|float
     */
    public function getConfidence()
    {
        if (is_null($this->confidence)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_CONFIDENCE);
            if (is_null($data)) {
                return null;
            }
            $this->confidence = (float) $data;
        }

        return $this->confidence;
    }

    /**

     * @return null|SimilarProductCollection
     */
    public function getProducts()
    {
        if (is_null($this->products)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRODUCTS);
            if (is_null($data)) {
                return null;
            }
            $this->products = SimilarProductCollection::fromArray($data);
        }

        return $this->products;
    }


    /**
     * @param ?float $confidence
     */
    public function setConfidence(?float $confidence): void
    {
        $this->confidence = $confidence;
    }

    /**
     * @param ?SimilarProductCollection $products
     */
    public function setProducts(?SimilarProductCollection $products): void
    {
        $this->products = $products;
    }
}
