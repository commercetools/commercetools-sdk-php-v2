<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeEmailChange>
 * @method ChangeEmailChange current()
 * @method ChangeEmailChange end()
 * @method ChangeEmailChange at($offset)
 */
class ChangeEmailChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeEmailChange $value
     * @psalm-param ChangeEmailChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEmailChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEmailChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEmailChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeEmailChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeEmailChange $data */
                $data = ChangeEmailChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
