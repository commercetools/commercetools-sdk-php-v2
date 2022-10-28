<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyBusinessUnitDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitDraftCollection<MyDivisionDraft>
 * @method MyDivisionDraft current()
 * @method MyDivisionDraft end()
 * @method MyDivisionDraft at($offset)
 */
class MyDivisionDraftCollection extends MyBusinessUnitDraftCollection
{
    /**
     * @psalm-assert MyDivisionDraft $value
     * @psalm-param MyDivisionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyDivisionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyDivisionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyDivisionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyDivisionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyDivisionDraft $data */
                $data = MyDivisionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
