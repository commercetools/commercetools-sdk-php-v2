<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountedPriceDraft>
 * @method DiscountedPriceDraft current()
 * @method DiscountedPriceDraft end()
 * @method DiscountedPriceDraft at($offset)
 */
class DiscountedPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedPriceDraft $value
     * @psalm-param DiscountedPriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedPriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountedPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedPriceDraft $data */
                $data = DiscountedPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
