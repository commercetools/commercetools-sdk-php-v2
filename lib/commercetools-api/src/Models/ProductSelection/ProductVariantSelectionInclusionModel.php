<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantSelectionInclusionModel extends JsonObjectModel implements ProductVariantSelectionInclusion
{
    public const DISCRIMINATOR_VALUE = 'inclusion';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?array
     */
    protected $skus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $skus = null
    ) {
        $this->skus = $skus;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be included into the Product Selection.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        if (is_null($this->skus)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_SKUS);
            if (is_null($data)) {
                return null;
            }
            $this->skus = $data;
        }

        return $this->skus;
    }


    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void
    {
        $this->skus = $skus;
    }
}
