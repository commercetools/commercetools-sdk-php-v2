<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<QuoteDraft>
 * @method QuoteDraft current()
 * @method QuoteDraft end()
 * @method QuoteDraft at($offset)
 */
class QuoteDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert QuoteDraft $value
     * @psalm-param QuoteDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteDraft $data */
                $data = QuoteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
