<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SimilarityMeasures extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ATTRIBUTE = 'attribute';
    public const FIELD_VARIANT_COUNT = 'variantCount';
    public const FIELD_PRICE = 'price';

    /**
     * <p>Importance of the <code>name</code> attribute in overall similarity.</p>
     *

     * @return null|int
     */
    public function getName();

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *

     * @return null|int
     */
    public function getDescription();

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *

     * @return null|int
     */
    public function getAttribute();

    /**
     * <p>Importance of the number of product variants in overall similarity.</p>
     *

     * @return null|int
     */
    public function getVariantCount();

    /**
     * <p>Importance of the <code>price</code> attribute in overall similarity.</p>
     *

     * @return null|int
     */
    public function getPrice();

    /**
     * @param ?int $name
     */
    public function setName(?int $name): void;

    /**
     * @param ?int $description
     */
    public function setDescription(?int $description): void;

    /**
     * @param ?int $attribute
     */
    public function setAttribute(?int $attribute): void;

    /**
     * @param ?int $variantCount
     */
    public function setVariantCount(?int $variantCount): void;

    /**
     * @param ?int $price
     */
    public function setPrice(?int $price): void;
}
