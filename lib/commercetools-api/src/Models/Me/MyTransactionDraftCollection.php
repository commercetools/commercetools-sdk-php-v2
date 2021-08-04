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
 * @extends MapperSequence<MyTransactionDraft>
 * @method MyTransactionDraft current()
 * @method MyTransactionDraft at($offset)
 */
class MyTransactionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyTransactionDraft $value
     * @psalm-param MyTransactionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyTransactionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyTransactionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyTransactionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyTransactionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyTransactionDraft $data */
                $data = MyTransactionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
