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
 * @extends MapperSequence<ChangeRequiresDiscountCodeAction>
 * @method ChangeRequiresDiscountCodeAction current()
 * @method ChangeRequiresDiscountCodeAction at($offset)
 */
class ChangeRequiresDiscountCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeRequiresDiscountCodeAction $value
     * @psalm-param ChangeRequiresDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeRequiresDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeRequiresDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeRequiresDiscountCodeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeRequiresDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeRequiresDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
