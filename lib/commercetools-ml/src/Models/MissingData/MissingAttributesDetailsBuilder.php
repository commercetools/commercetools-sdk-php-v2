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
 * @implements Builder<MissingAttributesDetails>
 */
final class MissingAttributesDetailsBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $missingAttributeNames;

    /**

     * @var ?int
     */
    private $missingAttributeValues;

    /**
     * <p>Number of products scanned.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of products missing attribute names.</p>
     *

     * @return null|int
     */
    public function getMissingAttributeNames()
    {
        return $this->missingAttributeNames;
    }

    /**
     * <p>Number of products missing attribute values.</p>
     *

     * @return null|int
     */
    public function getMissingAttributeValues()
    {
        return $this->missingAttributeValues;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?int $missingAttributeNames
     * @return $this
     */
    public function withMissingAttributeNames(?int $missingAttributeNames)
    {
        $this->missingAttributeNames = $missingAttributeNames;

        return $this;
    }

    /**
     * @param ?int $missingAttributeValues
     * @return $this
     */
    public function withMissingAttributeValues(?int $missingAttributeValues)
    {
        $this->missingAttributeValues = $missingAttributeValues;

        return $this;
    }


    public function build(): MissingAttributesDetails
    {
        return new MissingAttributesDetailsModel(
            $this->total,
            $this->missingAttributeNames,
            $this->missingAttributeValues
        );
    }

    public static function of(): MissingAttributesDetailsBuilder
    {
        return new self();
    }
}
