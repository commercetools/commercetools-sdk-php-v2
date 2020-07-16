<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeCoverageModel extends JsonObjectModel implements AttributeCoverage
{
    /**
     * @var ?float
     */
    protected $names;

    /**
     * @var ?float
     */
    protected $values;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $names = null,
        ?float $values = null
    ) {
        $this->names = $names;
        $this->values = $values;
    }

    /**
     * <p>The percentage of attributes from the product type defined in the product variant. A value of <code>1.0</code> indicates a product variant contains all attributes defined in the product type.</p>
     *
     * @return null|float
     */
    public function getNames()
    {
        if (is_null($this->names)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->names = (float) $data;
        }

        return $this->names;
    }

    /**
     * <p>Represents the percentage of attributes in the product variant that contain values.</p>
     *
     * @return null|float
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = (float) $data;
        }

        return $this->values;
    }


    /**
     * @param ?float $names
     */
    public function setNames(?float $names): void
    {
        $this->names = $names;
    }

    /**
     * @param ?float $values
     */
    public function setValues(?float $values): void
    {
        $this->values = $values;
    }
}
