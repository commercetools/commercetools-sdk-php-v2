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
 * @extends MapperSequence<CartDraft>
 * @method CartDraft current()
 * @method CartDraft end()
 * @method CartDraft at($offset)
 */
class CartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDraft $value
     * @psalm-param CartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDraft $data */
                $data = CartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
