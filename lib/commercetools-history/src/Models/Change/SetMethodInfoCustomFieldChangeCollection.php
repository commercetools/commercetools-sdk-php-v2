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
 * @extends ChangeCollection<SetMethodInfoCustomFieldChange>
 * @method SetMethodInfoCustomFieldChange current()
 * @method SetMethodInfoCustomFieldChange end()
 * @method SetMethodInfoCustomFieldChange at($offset)
 */
class SetMethodInfoCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoCustomFieldChange $value
     * @psalm-param SetMethodInfoCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoCustomFieldChange $data */
                $data = SetMethodInfoCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
