<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssociateDraft>
 * @method AssociateDraft current()
 * @method AssociateDraft end()
 * @method AssociateDraft at($offset)
 */
class AssociateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateDraft $value
     * @psalm-param AssociateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateDraft $data */
                $data = AssociateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
