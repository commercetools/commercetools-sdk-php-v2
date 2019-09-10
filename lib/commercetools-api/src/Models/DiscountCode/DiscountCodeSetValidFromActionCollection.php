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
 * @extends MapperSequence<DiscountCodeSetValidFromAction>
 * @method DiscountCodeSetValidFromAction current()
 * @method DiscountCodeSetValidFromAction at($offset)
 */
class DiscountCodeSetValidFromActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetValidFromAction $value
     * @psalm-param DiscountCodeSetValidFromAction|stdClass $value
     * @return DiscountCodeSetValidFromActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetValidFromAction
     */
    protected function mapper()
    {
        return function(int $index): ?DiscountCodeSetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetValidFromActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}