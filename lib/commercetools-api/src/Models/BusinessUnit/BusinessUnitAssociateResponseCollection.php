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
 * @extends MapperSequence<BusinessUnitAssociateResponse>
 * @method BusinessUnitAssociateResponse current()
 * @method BusinessUnitAssociateResponse end()
 * @method BusinessUnitAssociateResponse at($offset)
 */
class BusinessUnitAssociateResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitAssociateResponse $value
     * @psalm-param BusinessUnitAssociateResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateResponse $data */
                $data = BusinessUnitAssociateResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
