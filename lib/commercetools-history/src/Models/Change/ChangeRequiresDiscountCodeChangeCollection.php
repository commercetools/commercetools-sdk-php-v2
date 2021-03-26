<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeRequiresDiscountCodeChange>
 * @method ChangeRequiresDiscountCodeChange current()
 * @method ChangeRequiresDiscountCodeChange at($offset)
 */
class ChangeRequiresDiscountCodeChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeRequiresDiscountCodeChange $value
     * @psalm-param ChangeRequiresDiscountCodeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeRequiresDiscountCodeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeRequiresDiscountCodeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeRequiresDiscountCodeChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeRequiresDiscountCodeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeRequiresDiscountCodeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
