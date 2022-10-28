<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<BusinessUnitResourceIdentifier>
 * @method BusinessUnitResourceIdentifier current()
 * @method BusinessUnitResourceIdentifier end()
 * @method BusinessUnitResourceIdentifier at($offset)
 */
class BusinessUnitResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert BusinessUnitResourceIdentifier $value
     * @psalm-param BusinessUnitResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitResourceIdentifier $data */
                $data = BusinessUnitResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
