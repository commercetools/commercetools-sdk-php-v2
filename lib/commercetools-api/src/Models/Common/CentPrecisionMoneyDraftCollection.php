<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CentPrecisionMoneyDraft>
 *
 * @method CentPrecisionMoneyDraft current()
 * @method CentPrecisionMoneyDraft at($offset)
 */
class CentPrecisionMoneyDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CentPrecisionMoneyDraft $value
     * @psalm-param CentPrecisionMoneyDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CentPrecisionMoneyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CentPrecisionMoneyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CentPrecisionMoneyDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CentPrecisionMoneyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CentPrecisionMoneyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
