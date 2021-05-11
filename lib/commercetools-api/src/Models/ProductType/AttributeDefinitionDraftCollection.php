<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeDefinitionDraft>
 * @method AttributeDefinitionDraft current()
 * @method AttributeDefinitionDraft at($offset)
 */
class AttributeDefinitionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeDefinitionDraft $value
     * @psalm-param AttributeDefinitionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeDefinitionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDefinitionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDefinitionDraft
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeDefinitionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeDefinitionDraft $data */
                $data = AttributeDefinitionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
