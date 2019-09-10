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
 * @extends MapperSequence<ShippingRateInputDraft>
 * @method ShippingRateInputDraft current()
 * @method ShippingRateInputDraft at($offset)
 */
class ShippingRateInputDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRateInputDraft $value
     * @psalm-param ShippingRateInputDraft|stdClass $value
     * @return ShippingRateInputDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingRateInputDraft
     */
    protected function mapper()
    {
        return function(int $index): ?ShippingRateInputDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingRateInputDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}