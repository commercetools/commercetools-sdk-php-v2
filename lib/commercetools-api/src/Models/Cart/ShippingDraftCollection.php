<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingDraft>
 * @method ShippingDraft current()
 * @method ShippingDraft end()
 * @method ShippingDraft at($offset)
 */
class ShippingDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingDraft $value
     * @psalm-param ShippingDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingDraft $data */
                $data = ShippingDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
