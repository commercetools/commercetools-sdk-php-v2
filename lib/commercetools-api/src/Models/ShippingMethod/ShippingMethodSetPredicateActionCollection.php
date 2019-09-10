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
 * @extends MapperSequence<ShippingMethodSetPredicateAction>
 * @method ShippingMethodSetPredicateAction current()
 * @method ShippingMethodSetPredicateAction at($offset)
 */
class ShippingMethodSetPredicateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodSetPredicateAction $value
     * @psalm-param ShippingMethodSetPredicateAction|stdClass $value
     * @return ShippingMethodSetPredicateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetPredicateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShippingMethodSetPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodSetPredicateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}