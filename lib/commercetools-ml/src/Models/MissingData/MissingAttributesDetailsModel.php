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
final class MissingAttributesDetailsModel extends JsonObjectModel implements MissingAttributesDetails
{
    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $missingAttributeNames;

    /**
     *
     * @var ?int
     */
    protected $missingAttributeValues;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $total = null,
        ?int $missingAttributeNames = null,
        ?int $missingAttributeValues = null
    ) {
        $this->total = $total;
        $this->missingAttributeNames = $missingAttributeNames;
        $this->missingAttributeValues = $missingAttributeValues;
    }

    /**
     * <p>Number of products scanned.</p>
     *
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * <p>Number of products missing attribute names.</p>
     *
     *
     * @return null|int
     */
    public function getMissingAttributeNames()
    {
        if (is_null($this->missingAttributeNames)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING_ATTRIBUTE_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->missingAttributeNames = (int) $data;
        }

        return $this->missingAttributeNames;
    }

    /**
     * <p>Number of products missing attribute values.</p>
     *
     *
     * @return null|int
     */
    public function getMissingAttributeValues()
    {
        if (is_null($this->missingAttributeValues)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING_ATTRIBUTE_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->missingAttributeValues = (int) $data;
        }

        return $this->missingAttributeValues;
    }


    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?int $missingAttributeNames
     */
    public function setMissingAttributeNames(?int $missingAttributeNames): void
    {
        $this->missingAttributeNames = $missingAttributeNames;
    }

    /**
     * @param ?int $missingAttributeValues
     */
    public function setMissingAttributeValues(?int $missingAttributeValues): void
    {
        $this->missingAttributeValues = $missingAttributeValues;
    }
}
