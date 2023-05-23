<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssociateRolePagedQueryResponse>
 * @method AssociateRolePagedQueryResponse current()
 * @method AssociateRolePagedQueryResponse end()
 * @method AssociateRolePagedQueryResponse at($offset)
 */
class AssociateRolePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateRolePagedQueryResponse $value
     * @psalm-param AssociateRolePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePagedQueryResponse $data */
                $data = AssociateRolePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
