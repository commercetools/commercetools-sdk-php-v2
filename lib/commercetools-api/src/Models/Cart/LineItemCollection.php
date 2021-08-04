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
 * @extends MapperSequence<LineItem>
 * @method LineItem current()
 * @method LineItem at($offset)
 */
class LineItemCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItem $value
     * @psalm-param LineItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItem
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItem $data */
                $data = LineItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
