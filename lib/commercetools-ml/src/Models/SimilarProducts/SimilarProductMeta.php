<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Ml\Models\Common\LocalizedString;
use Commercetools\Ml\Models\Common\Money;

interface SimilarProductMeta extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PRICE = 'price';
    public const FIELD_VARIANT_COUNT = 'variantCount';

    /**
     * <p>Localized product name used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Localized product description used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>The product price in cents using the currency defined in SimilarProductSearchRequest If multiple prices exist, the median value is taken as a representative amount.</p>
     *
     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Total number of variants associated with the product.</p>
     *
     * @return null|int
     */
    public function getVariantCount();

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setPrice(?Money $price): void;

    public function setVariantCount(?int $variantCount): void;
}
