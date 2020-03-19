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
     * @var ?int
     */
    protected $names;

    /**
     * @var ?int
     */
    protected $values;


    public function __construct(
        int $names = null,
        int $values = null
    ) {
        $this->names = $names;
        $this->values = $values;

    }

    /**
     * <p>The percentage of attributes from the product type defined in the product variant. A value of <code>1.0</code> indicates a product variant contains all attributes defined in the product type.</p>
     *
     * @return null|int
     */
    public function getNames()
    {
        if (is_null($this->names)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(AttributeCoverage::FIELD_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->names = (int) $data;
        }

        return $this->names;
    }

    /**
     * <p>Represents the percentage of attributes in the product variant that contain values.</p>
     *
     * @return null|int
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(AttributeCoverage::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = (int) $data;
        }

        return $this->values;
    }

    public function setNames(?int $names): void
    {
        $this->names = $names;
    }

    public function setValues(?int $values): void
    {
        $this->values = $values;
    }



}
