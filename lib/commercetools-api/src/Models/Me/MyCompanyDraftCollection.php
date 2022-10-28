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
 * @extends MyBusinessUnitDraftCollection<MyCompanyDraft>
 * @method MyCompanyDraft current()
 * @method MyCompanyDraft end()
 * @method MyCompanyDraft at($offset)
 */
class MyCompanyDraftCollection extends MyBusinessUnitDraftCollection
{
    /**
     * @psalm-assert MyCompanyDraft $value
     * @psalm-param MyCompanyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCompanyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCompanyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCompanyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCompanyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCompanyDraft $data */
                $data = MyCompanyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
