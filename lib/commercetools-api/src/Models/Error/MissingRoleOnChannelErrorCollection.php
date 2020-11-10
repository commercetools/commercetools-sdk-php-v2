<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingRoleOnChannelError>
 * @method MissingRoleOnChannelError current()
 * @method MissingRoleOnChannelError at($offset)
 */
class MissingRoleOnChannelErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingRoleOnChannelError $value
     * @psalm-param MissingRoleOnChannelError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingRoleOnChannelErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingRoleOnChannelError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingRoleOnChannelError
     */
    protected function mapper()
    {
        return function (int $index): ?MissingRoleOnChannelError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingRoleOnChannelErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
