<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class RangeFacetResultModel extends JsonObjectModel implements RangeFacetResult
{
    const DISCRIMINATOR_VALUE = 'range';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?FacetResultRangeCollection
     */
    protected $ranges;

    public function __construct(
        FacetResultRangeCollection $ranges = null
    ) {
        $this->ranges = $ranges;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FacetResult::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|FacetResultRangeCollection
     */
    public function getRanges()
    {
        if (is_null($this->ranges)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(RangeFacetResult::FIELD_RANGES);
            if (is_null($data)) {
                return null;
            }
            $this->ranges = FacetResultRangeCollection::fromArray($data);
        }

        return $this->ranges;
    }

    public function setRanges(?FacetResultRangeCollection $ranges): void
    {
        $this->ranges = $ranges;
    }
}
