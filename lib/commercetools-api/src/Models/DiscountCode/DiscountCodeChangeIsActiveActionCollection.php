<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeChangeIsActiveAction>
 * @method DiscountCodeChangeIsActiveAction current()
 * @method DiscountCodeChangeIsActiveAction at($offset)
 */
class DiscountCodeChangeIsActiveActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeChangeIsActiveAction $value
     * @psalm-param DiscountCodeChangeIsActiveAction|stdClass $value
     * @return DiscountCodeChangeIsActiveActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeChangeIsActiveAction
     */
    protected function mapper()
    {
        return function(int $index): ?DiscountCodeChangeIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeChangeIsActiveActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}