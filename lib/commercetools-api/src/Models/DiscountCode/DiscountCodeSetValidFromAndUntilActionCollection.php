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
 * @extends MapperSequence<DiscountCodeSetValidFromAndUntilAction>
 * @method DiscountCodeSetValidFromAndUntilAction current()
 * @method DiscountCodeSetValidFromAndUntilAction at($offset)
 */
class DiscountCodeSetValidFromAndUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetValidFromAndUntilAction $value
     * @psalm-param DiscountCodeSetValidFromAndUntilAction|stdClass $value
     * @return DiscountCodeSetValidFromAndUntilActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function(int $index): ?DiscountCodeSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}