<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyLineItemDraft>
 * @method MyLineItemDraft current()
 * @method MyLineItemDraft at($offset)
 */
class MyLineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyLineItemDraft $value
     * @psalm-param MyLineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyLineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyLineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyLineItemDraft
     */
    protected function mapper()
    {
        return function (int $index): ?MyLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
