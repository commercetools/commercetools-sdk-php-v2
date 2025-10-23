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
 * @extends ChangeCollection<SetParcelCustomFieldChange>
 * @method SetParcelCustomFieldChange current()
 * @method SetParcelCustomFieldChange end()
 * @method SetParcelCustomFieldChange at($offset)
 */
class SetParcelCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetParcelCustomFieldChange $value
     * @psalm-param SetParcelCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetParcelCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetParcelCustomFieldChange $data */
                $data = SetParcelCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
