<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeCoverage>
 */
final class AttributeCoverageBuilder implements Builder
{
    /**

     * @var ?float
     */
    private $names;

    /**

     * @var ?float
     */
    private $values;

    /**
     * <p>The percentage of attributes from the product type defined in the product variant. A value of <code>1.0</code> indicates a product variant contains all attributes defined in the product type.</p>
     *

     * @return null|float
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * <p>Represents the percentage of attributes in the product variant that contain values.</p>
     *

     * @return null|float
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ?float $names
     * @return $this
     */
    public function withNames(?float $names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @param ?float $values
     * @return $this
     */
    public function withValues(?float $values)
    {
        $this->values = $values;

        return $this;
    }


    public function build(): AttributeCoverage
    {
        return new AttributeCoverageModel(
            $this->names,
            $this->values
        );
    }

    public static function of(): AttributeCoverageBuilder
    {
        return new self();
    }
}
