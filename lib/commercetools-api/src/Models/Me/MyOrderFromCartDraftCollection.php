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
 * @extends MapperSequence<MyOrderFromCartDraft>
 * @method MyOrderFromCartDraft current()
 * @method MyOrderFromCartDraft at($offset)
 */
class MyOrderFromCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyOrderFromCartDraft $value
     * @psalm-param MyOrderFromCartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyOrderFromCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyOrderFromCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyOrderFromCartDraft
     */
    protected function mapper()
    {
        return function (int $index): ?MyOrderFromCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyOrderFromCartDraft $data */
                $data = MyOrderFromCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
