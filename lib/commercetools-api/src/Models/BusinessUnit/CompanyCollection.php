<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitCollection<Company>
 * @method Company current()
 * @method Company end()
 * @method Company at($offset)
 */
class CompanyCollection extends BusinessUnitCollection
{
    /**
     * @psalm-assert Company $value
     * @psalm-param Company|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CompanyCollection
     */
    public function add($value)
    {
        if (!$value instanceof Company) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Company
     */
    protected function mapper()
    {
        return function (?int $index): ?Company {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Company $data */
                $data = CompanyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
