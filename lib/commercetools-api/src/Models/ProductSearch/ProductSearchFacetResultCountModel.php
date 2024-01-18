<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetResultCountModel extends JsonObjectModel implements ProductSearchFacetResultCount
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?int
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?int $value = null
    ) {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * <p>Name of the facet.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Number of Products (or Product Variants) matching the query.</p>
     *
     *
     * @return null|int
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (int) $data;
        }

        return $this->value;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }
}
