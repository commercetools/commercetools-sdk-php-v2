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
 * @extends ChangeCollection<SetCompanyNameChange>
 * @method SetCompanyNameChange current()
 * @method SetCompanyNameChange at($offset)
 */
class SetCompanyNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCompanyNameChange $value
     * @psalm-param SetCompanyNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCompanyNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCompanyNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCompanyNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCompanyNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCompanyNameChange $data */
                $data = SetCompanyNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
