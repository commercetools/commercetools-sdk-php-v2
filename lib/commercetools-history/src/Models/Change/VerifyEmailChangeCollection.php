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
 * @extends ChangeCollection<VerifyEmailChange>
 * @method VerifyEmailChange current()
 * @method VerifyEmailChange at($offset)
 */
class VerifyEmailChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert VerifyEmailChange $value
     * @psalm-param VerifyEmailChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VerifyEmailChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof VerifyEmailChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VerifyEmailChange
     */
    protected function mapper()
    {
        return function (int $index): ?VerifyEmailChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VerifyEmailChange $data */
                $data = VerifyEmailChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
