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
 * @extends MapperSequence<CustomShippingDraft>
 * @method CustomShippingDraft current()
 * @method CustomShippingDraft end()
 * @method CustomShippingDraft at($offset)
 */
class CustomShippingDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomShippingDraft $value
     * @psalm-param CustomShippingDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomShippingDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomShippingDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomShippingDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomShippingDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomShippingDraft $data */
                $data = CustomShippingDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
