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
 * @extends MapperSequence<DiscountCodeSetCustomTypeAction>
 * @method DiscountCodeSetCustomTypeAction current()
 * @method DiscountCodeSetCustomTypeAction at($offset)
 */
class DiscountCodeSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetCustomTypeAction $value
     * @psalm-param DiscountCodeSetCustomTypeAction|stdClass $value
     * @return DiscountCodeSetCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?DiscountCodeSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}