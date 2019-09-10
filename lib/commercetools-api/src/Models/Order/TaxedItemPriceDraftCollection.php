<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxedItemPriceDraft>
 *
 * @method TaxedItemPriceDraft current()
 * @method TaxedItemPriceDraft at($offset)
 */
class TaxedItemPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxedItemPriceDraft $value
     * @psalm-param TaxedItemPriceDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TaxedItemPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxedItemPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxedItemPriceDraft
     */
    protected function mapper()
    {
        return function (int $index): ?TaxedItemPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxedItemPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
