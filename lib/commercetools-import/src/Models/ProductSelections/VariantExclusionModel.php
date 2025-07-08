<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantExclusionModel extends JsonObjectModel implements VariantExclusion
{
    /**
     *
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
    }

    /**
     * <p>List of SKUs to be excluded.</p>
     *
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
