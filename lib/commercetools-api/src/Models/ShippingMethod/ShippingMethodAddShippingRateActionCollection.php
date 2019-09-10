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
 * @extends MapperSequence<ShippingMethodAddShippingRateAction>
 * @method ShippingMethodAddShippingRateAction current()
 * @method ShippingMethodAddShippingRateAction at($offset)
 */
class ShippingMethodAddShippingRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodAddShippingRateAction $value
     * @psalm-param ShippingMethodAddShippingRateAction|stdClass $value
     * @return ShippingMethodAddShippingRateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddShippingRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddShippingRateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShippingMethodAddShippingRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodAddShippingRateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}