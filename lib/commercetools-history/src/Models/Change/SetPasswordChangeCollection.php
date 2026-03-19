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
 * @extends ChangeCollection<SetPasswordChange>
 * @method SetPasswordChange current()
 * @method SetPasswordChange end()
 * @method SetPasswordChange at($offset)
 */
class SetPasswordChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPasswordChange $value
     * @psalm-param SetPasswordChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPasswordChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPasswordChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPasswordChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPasswordChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPasswordChange $data */
                $data = SetPasswordChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
