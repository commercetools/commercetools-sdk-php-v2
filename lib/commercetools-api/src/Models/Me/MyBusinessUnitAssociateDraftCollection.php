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
 * @extends MapperSequence<MyBusinessUnitAssociateDraft>
 * @method MyBusinessUnitAssociateDraft current()
 * @method MyBusinessUnitAssociateDraft end()
 * @method MyBusinessUnitAssociateDraft at($offset)
 */
class MyBusinessUnitAssociateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyBusinessUnitAssociateDraft $value
     * @psalm-param MyBusinessUnitAssociateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitAssociateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitAssociateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitAssociateDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitAssociateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitAssociateDraft $data */
                $data = MyBusinessUnitAssociateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
