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
 * @extends MapperSequence<DiscountCodeUpdateAction>
 * @method DiscountCodeUpdateAction current()
 * @method DiscountCodeUpdateAction at($offset)
 */
class DiscountCodeUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeUpdateAction $value
     * @psalm-param DiscountCodeUpdateAction|stdClass $value
     * @return DiscountCodeUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?DiscountCodeUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}