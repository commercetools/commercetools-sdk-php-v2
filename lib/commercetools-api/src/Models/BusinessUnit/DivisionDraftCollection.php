<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitDraftCollection<DivisionDraft>
 * @method DivisionDraft current()
 * @method DivisionDraft end()
 * @method DivisionDraft at($offset)
 */
class DivisionDraftCollection extends BusinessUnitDraftCollection
{
    /**
     * @psalm-assert DivisionDraft $value
     * @psalm-param DivisionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DivisionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DivisionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DivisionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DivisionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DivisionDraft $data */
                $data = DivisionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
