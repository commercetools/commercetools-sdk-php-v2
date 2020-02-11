<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TextLineItem>
 * @method TextLineItem current()
 * @method TextLineItem at($offset)
 */
class TextLineItemCollection extends MapperSequence
{
    /**
     * @psalm-assert TextLineItem $value
     * @psalm-param TextLineItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TextLineItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof TextLineItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TextLineItem
     */
    protected function mapper()
    {
        return function (int $index): ?TextLineItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TextLineItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
