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
 * @extends MapperSequence<PriceTierDraft>
 * @method PriceTierDraft current()
 * @method PriceTierDraft at($offset)
 */
class PriceTierDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceTierDraft $value
     * @psalm-param PriceTierDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceTierDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceTierDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceTierDraft
     */
    protected function mapper()
    {
        return function (int $index): ?PriceTierDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceTierDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
