<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxedPriceDraft>
 *
 * @method TaxedPriceDraft current()
 * @method TaxedPriceDraft at($offset)
 */
class TaxedPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxedPriceDraft $value
     * @psalm-param TaxedPriceDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TaxedPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxedPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxedPriceDraft
     */
    protected function mapper()
    {
        return function (int $index): ?TaxedPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxedPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
