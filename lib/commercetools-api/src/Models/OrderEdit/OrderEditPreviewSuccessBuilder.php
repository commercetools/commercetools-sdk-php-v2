<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditPreviewSuccess>
 */
final class OrderEditPreviewSuccessBuilder implements Builder
{
    /**

     * @var null|StagedOrder|StagedOrderBuilder
     */
    private $preview;

    /**

     * @var ?MessagePayloadCollection
     */
    private $messagePayloads;

    /**
     * <p>A preview of the edited <a href="ctp:api:type:Order">Order</a> as it will be after all <code>stagedActions</code> (incl. optional Order <a href="/../api/projects/api-extensions">API Extensions</a>) are applied.</p>
     *

     * @return null|StagedOrder
     */
    public function getPreview()
    {
        return $this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview;
    }

    /**
     * <p>Messages that will be generated if the edit is applied.</p>
     *

     * @return null|MessagePayloadCollection
     */
    public function getMessagePayloads()
    {
        return $this->messagePayloads;
    }

    /**
     * @param ?StagedOrder $preview
     * @return $this
     */
    public function withPreview(?StagedOrder $preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * @param ?MessagePayloadCollection $messagePayloads
     * @return $this
     */
    public function withMessagePayloads(?MessagePayloadCollection $messagePayloads)
    {
        $this->messagePayloads = $messagePayloads;

        return $this;
    }

    /**
     * @deprecated use withPreview() instead
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
            $this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview,
            $this->messagePayloads
        );
    }

    public static function of(): OrderEditPreviewSuccessBuilder
    {
        return new self();
    }
}
