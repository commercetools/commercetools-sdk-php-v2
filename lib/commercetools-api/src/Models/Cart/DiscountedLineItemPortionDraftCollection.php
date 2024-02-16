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
 * @extends MapperSequence<DiscountedLineItemPortionDraft>
 * @method DiscountedLineItemPortionDraft current()
 * @method DiscountedLineItemPortionDraft end()
 * @method DiscountedLineItemPortionDraft at($offset)
 */
class DiscountedLineItemPortionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedLineItemPortionDraft $value
     * @psalm-param DiscountedLineItemPortionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedLineItemPortionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedLineItemPortionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedLineItemPortionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountedLineItemPortionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedLineItemPortionDraft $data */
                $data = DiscountedLineItemPortionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
