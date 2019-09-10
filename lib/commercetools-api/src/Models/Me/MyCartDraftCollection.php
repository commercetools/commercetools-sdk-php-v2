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
 * @extends MapperSequence<MyCartDraft>
 *
 * @method MyCartDraft current()
 * @method MyCartDraft at($offset)
 */
class MyCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartDraft $value
     * @psalm-param MyCartDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartDraft
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
