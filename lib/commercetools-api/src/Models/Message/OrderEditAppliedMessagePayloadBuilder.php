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

/**
 * @implements Builder<OrderEditAppliedMessagePayload>
 */
final class OrderEditAppliedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var OrderEditApplied|?OrderEditAppliedBuilder
     */
    private $result;

    /**
     * @var OrderEditReference|?OrderEditReferenceBuilder
     */
    private $edit;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|OrderEditApplied
     */
    public function getResult()
    {
        return $this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result;
    }

    /**
     * @return null|OrderEditReference
     */
    public function getEdit()
    {
        return $this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResult(?OrderEditApplied $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEdit(?OrderEditReference $edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResultBuilder(?OrderEditAppliedBuilder $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEditBuilder(?OrderEditReferenceBuilder $edit)
    {
        $this->edit = $edit;

        return $this;
    }

    public function build(): OrderEditAppliedMessagePayload
    {
        return new OrderEditAppliedMessagePayloadModel(
            $this->type,
            ($this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result),
            ($this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit)
        );
    }

    public static function of(): OrderEditAppliedMessagePayloadBuilder
    {
        return new self();
    }
}
