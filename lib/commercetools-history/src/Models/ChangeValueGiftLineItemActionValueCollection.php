<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeValueGiftLineItemActionValue>
 * @method ChangeValueGiftLineItemActionValue current()
 * @method ChangeValueGiftLineItemActionValue at($offset)
 */
class ChangeValueGiftLineItemActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueGiftLineItemActionValue $value
     * @psalm-param ChangeValueGiftLineItemActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueGiftLineItemActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueGiftLineItemActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueGiftLineItemActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueGiftLineItemActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueGiftLineItemActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
