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
 * @extends MapperSequence<AnonymousIdAlreadyInUseError>
 * @method AnonymousIdAlreadyInUseError current()
 * @method AnonymousIdAlreadyInUseError at($offset)
 */
class AnonymousIdAlreadyInUseErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert AnonymousIdAlreadyInUseError $value
     * @psalm-param AnonymousIdAlreadyInUseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AnonymousIdAlreadyInUseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AnonymousIdAlreadyInUseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AnonymousIdAlreadyInUseError
     */
    protected function mapper()
    {
        return function (int $index): ?AnonymousIdAlreadyInUseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AnonymousIdAlreadyInUseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
