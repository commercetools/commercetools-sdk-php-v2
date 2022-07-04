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
 * @extends MapperSequence<DirectDiscountDraft>
 * @method DirectDiscountDraft current()
 * @method DirectDiscountDraft end()
 * @method DirectDiscountDraft at($offset)
 */
class DirectDiscountDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DirectDiscountDraft $value
     * @psalm-param DirectDiscountDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DirectDiscountDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DirectDiscountDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DirectDiscountDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DirectDiscountDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DirectDiscountDraft $data */
                $data = DirectDiscountDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
