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
 * @extends CustomFieldCollection<ReferenceField>
 * @method ReferenceField current()
 * @method ReferenceField end()
 * @method ReferenceField at($offset)
 */
class ReferenceFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert ReferenceField $value
     * @psalm-param ReferenceField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceField
     */
    protected function mapper()
    {
        return function (?int $index): ?ReferenceField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReferenceField $data */
                $data = ReferenceFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
