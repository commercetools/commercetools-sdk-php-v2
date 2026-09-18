<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<AgentNoLineItemsExtractedError>
 * @method AgentNoLineItemsExtractedError current()
 * @method AgentNoLineItemsExtractedError end()
 * @method AgentNoLineItemsExtractedError at($offset)
 */
class AgentNoLineItemsExtractedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentNoLineItemsExtractedError $value
     * @psalm-param AgentNoLineItemsExtractedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentNoLineItemsExtractedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentNoLineItemsExtractedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentNoLineItemsExtractedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentNoLineItemsExtractedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentNoLineItemsExtractedError $data */
                $data = AgentNoLineItemsExtractedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
