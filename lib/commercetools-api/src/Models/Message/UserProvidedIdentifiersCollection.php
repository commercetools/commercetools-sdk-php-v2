<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<UserProvidedIdentifiers>
 * @method UserProvidedIdentifiers current()
 * @method UserProvidedIdentifiers at($offset)
 */
class UserProvidedIdentifiersCollection extends MapperSequence
{
    /**
     * @psalm-assert UserProvidedIdentifiers $value
     * @psalm-param UserProvidedIdentifiers|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UserProvidedIdentifiersCollection
     */
    public function add($value)
    {
        if (!$value instanceof UserProvidedIdentifiers) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UserProvidedIdentifiers
     */
    protected function mapper()
    {
        return function (int $index): ?UserProvidedIdentifiers {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UserProvidedIdentifiersModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
