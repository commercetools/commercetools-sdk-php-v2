<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MultiBuyLineItemsTarget>
 * @method MultiBuyLineItemsTarget current()
 * @method MultiBuyLineItemsTarget at($offset)
 */
class MultiBuyLineItemsTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert MultiBuyLineItemsTarget $value
     * @psalm-param MultiBuyLineItemsTarget|stdClass $value
     * @return MultiBuyLineItemsTargetCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof MultiBuyLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MultiBuyLineItemsTarget
     */
    protected function mapper()
    {
        return function(int $index): ?MultiBuyLineItemsTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MultiBuyLineItemsTargetModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}