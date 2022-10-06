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
 * @extends BusinessUnitDraftCollection<CompanyDraft>
 * @method CompanyDraft current()
 * @method CompanyDraft end()
 * @method CompanyDraft at($offset)
 */
class CompanyDraftCollection extends BusinessUnitDraftCollection
{
    /**
     * @psalm-assert CompanyDraft $value
     * @psalm-param CompanyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CompanyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CompanyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CompanyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CompanyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CompanyDraft $data */
                $data = CompanyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
