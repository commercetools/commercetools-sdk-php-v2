<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartChangeTaxRoundingModeAction>
 * @method CartChangeTaxRoundingModeAction current()
 * @method CartChangeTaxRoundingModeAction at($offset)
 */
class CartChangeTaxRoundingModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartChangeTaxRoundingModeAction $value
     * @psalm-param CartChangeTaxRoundingModeAction|stdClass $value
     * @return CartChangeTaxRoundingModeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeTaxRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeTaxRoundingModeAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartChangeTaxRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartChangeTaxRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}