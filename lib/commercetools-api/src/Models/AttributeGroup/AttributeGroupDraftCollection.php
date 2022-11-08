<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeGroupDraft>
 * @method AttributeGroupDraft current()
 * @method AttributeGroupDraft end()
 * @method AttributeGroupDraft at($offset)
 */
class AttributeGroupDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeGroupDraft $value
     * @psalm-param AttributeGroupDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupDraft $data */
                $data = AttributeGroupDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
