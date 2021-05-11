<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditAppliedMessagePayload>
 */
final class OrderEditAppliedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|OrderEditReference|OrderEditReferenceBuilder
     */
    private $edit;

    /**
     * @var null|OrderEditApplied|OrderEditAppliedBuilder
     */
    private $result;

    /**
     * @return null|OrderEditReference
     */
    public function getEdit()
    {
        return $this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit;
    }

    /**
     * @return null|OrderEditApplied
     */
    public function getResult()
    {
        return $this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result;
    }

    /**
     * @param ?OrderEditReference $edit
     * @return $this
     */
    public function withEdit(?OrderEditReference $edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * @param ?OrderEditApplied $result
     * @return $this
     */
    public function withResult(?OrderEditApplied $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @deprecated use withEdit() instead
     * @return $this
     */
    public function withEditBuilder(?OrderEditReferenceBuilder $edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * @deprecated use withResult() instead
     * @return $this
     */
    public function withResultBuilder(?OrderEditAppliedBuilder $result)
    {
        $this->result = $result;

        return $this;
    }

    public function build(): OrderEditAppliedMessagePayload
    {
        return new OrderEditAppliedMessagePayloadModel(
            $this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit,
            $this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result
        );
    }

    public static function of(): OrderEditAppliedMessagePayloadBuilder
    {
        return new self();
    }
}
