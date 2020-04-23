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
use Commercetools\Ml\Models\Common\LocalizedString;
use Commercetools\Ml\Models\Common\LocalizedStringModel;
use Commercetools\Ml\Models\Common\Money;
use Commercetools\Ml\Models\Common\MoneyModel;
use stdClass;

/**
 * @internal
 */
final class SimilarProductMetaModel extends JsonObjectModel implements SimilarProductMeta
{
    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?Money
     */
    protected $price;

    /**
     * @var ?int
     */
    protected $variantCount;


    public function __construct(
        LocalizedString $name = null,
        LocalizedString $description = null,
        Money $price = null,
        int $variantCount = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->variantCount = $variantCount;
    }

    /**
     * <p>Localized product name used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Localized product description used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>The product price in cents using the currency defined in SimilarProductSearchRequest If multiple prices exist, the median value is taken as a representative amount.</p>
     *
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Total number of variants associated with the product.</p>
     *
     * @return null|int
     */
    public function getVariantCount()
    {
        if (is_null($this->variantCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->variantCount = (int) $data;
        }

        return $this->variantCount;
    }


    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    public function setVariantCount(?int $variantCount): void
    {
        $this->variantCount = $variantCount;
    }
}
