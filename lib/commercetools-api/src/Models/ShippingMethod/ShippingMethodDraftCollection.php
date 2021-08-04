<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodDraft>
 * @method ShippingMethodDraft current()
 * @method ShippingMethodDraft at($offset)
 */
class ShippingMethodDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodDraft $value
     * @psalm-param ShippingMethodDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodDraft $data */
                $data = ShippingMethodDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
