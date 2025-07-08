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
final class VariantSelectionModel extends JsonObjectModel implements VariantSelection
{
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?array
     */
    protected $skus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null,
        ?array $skus = null
    ) {
        $this->type = $type;
        $this->skus = $skus;
    }

    /**
     * <p>Type of variant selection.</p>
     *
     *
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
     * <p>List of SKUs to include or exclude.</p>
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
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void
    {
        $this->skus = $skus;
    }
}
