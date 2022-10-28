<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEditBuilder;
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

     * @var null|OrderEdit|OrderEditBuilder
     */
    private $edit;

    /**

     * @var null|OrderEditApplied|OrderEditAppliedBuilder
     */
    private $result;

    /**
     * <p><a href="ctp:api:type:OrderEdit">OrderEdit</a> that was applied.</p>
     *

     * @return null|OrderEdit
     */
    public function getEdit()
    {
        return $this->edit instanceof OrderEditBuilder ? $this->edit->build() : $this->edit;
    }

    /**
     * <p>Information about a successfully applied <a href="ctp:api:type:OrderEdit">OrderEdit</a>.</p>
     *

     * @return null|OrderEditApplied
     */
    public function getResult()
    {
        return $this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result;
    }

    /**
     * @param ?OrderEdit $edit
     * @return $this
     */
    public function withEdit(?OrderEdit $edit)
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
    public function withEditBuilder(?OrderEditBuilder $edit)
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
            $this->edit instanceof OrderEditBuilder ? $this->edit->build() : $this->edit,
            $this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result
        );
    }

    public static function of(): OrderEditAppliedMessagePayloadBuilder
    {
        return new self();
    }
}
