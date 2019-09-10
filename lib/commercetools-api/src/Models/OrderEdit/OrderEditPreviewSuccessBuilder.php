<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditPreviewSuccess>
 */
final class OrderEditPreviewSuccessBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var StagedOrder|?StagedOrderBuilder
     */
    private $preview;

    /**
     * @var ?MessagePayloadCollection
     */
    private $messagePayloads;

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
     * @return null|StagedOrder
     */
    public function getPreview()
    {
        return $this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview;
    }

    /**
     * @return null|MessagePayloadCollection
     */
    public function getMessagePayloads()
    {
        return $this->messagePayloads;
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
    public function withPreview(?StagedOrder $preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessagePayloads(?MessagePayloadCollection $messagePayloads)
    {
        $this->messagePayloads = $messagePayloads;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviewBuilder(?StagedOrderBuilder $preview)
    {
        $this->preview = $preview;

        return $this;
    }

    public function build(): OrderEditPreviewSuccess
    {
        return new OrderEditPreviewSuccessModel(
            $this->type,
            ($this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview),
            $this->messagePayloads
        );
    }

    public static function of(): OrderEditPreviewSuccessBuilder
    {
        return new self();
    }
}
