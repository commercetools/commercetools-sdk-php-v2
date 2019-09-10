<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodUpdateAction>
 * @method ShippingMethodUpdateAction current()
 * @method ShippingMethodUpdateAction at($offset)
 */
class ShippingMethodUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodUpdateAction $value
     * @psalm-param ShippingMethodUpdateAction|stdClass $value
     * @return ShippingMethodUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShippingMethodUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}