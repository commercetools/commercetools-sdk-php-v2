<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\TypedMoneyDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TypedMoneyDraftCollection<HighPrecisionMoneyDraft>
 * @method HighPrecisionMoneyDraft current()
 * @method HighPrecisionMoneyDraft at($offset)
 */
class HighPrecisionMoneyDraftCollection extends TypedMoneyDraftCollection
{
    /**
     * @psalm-assert HighPrecisionMoneyDraft $value
     * @psalm-param HighPrecisionMoneyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return HighPrecisionMoneyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof HighPrecisionMoneyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?HighPrecisionMoneyDraft
     */
    protected function mapper()
    {
        return function (int $index): ?HighPrecisionMoneyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var HighPrecisionMoneyDraft $data */
                $data = HighPrecisionMoneyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
