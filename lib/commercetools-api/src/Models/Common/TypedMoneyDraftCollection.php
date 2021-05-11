<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of TypedMoneyDraft
 * @extends MoneyCollection<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method TypedMoneyDraft current()
 * @method TypedMoneyDraft at($offset)
 */
class TypedMoneyDraftCollection extends MoneyCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypedMoneyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypedMoneyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?TypedMoneyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = TypedMoneyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
