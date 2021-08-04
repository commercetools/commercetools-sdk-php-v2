<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Customfields\CustomFieldCollection;
use stdClass;

/**
 * @extends CustomFieldCollection<BooleanField>
 * @method BooleanField current()
 * @method BooleanField end()
 * @method BooleanField at($offset)
 */
class BooleanFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert BooleanField $value
     * @psalm-param BooleanField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BooleanFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof BooleanField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BooleanField
     */
    protected function mapper()
    {
        return function (?int $index): ?BooleanField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BooleanField $data */
                $data = BooleanFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
