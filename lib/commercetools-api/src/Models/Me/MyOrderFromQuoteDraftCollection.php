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
 * @extends MapperSequence<MyOrderFromQuoteDraft>
 * @method MyOrderFromQuoteDraft current()
 * @method MyOrderFromQuoteDraft end()
 * @method MyOrderFromQuoteDraft at($offset)
 */
class MyOrderFromQuoteDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyOrderFromQuoteDraft $value
     * @psalm-param MyOrderFromQuoteDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyOrderFromQuoteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyOrderFromQuoteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyOrderFromQuoteDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyOrderFromQuoteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyOrderFromQuoteDraft $data */
                $data = MyOrderFromQuoteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
