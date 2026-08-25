<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreOrderUrlTemplateSetMessagePayload>
 */
final class StoreOrderUrlTemplateSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderUrlTemplate;

    /**
     * <p>The <code>orderUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetOrderUrlTemplateAction">Set Order Url Template</a> update action.</p>
     *

     * @return null|string
     */
    public function getOrderUrlTemplate()
    {
        return $this->orderUrlTemplate;
    }

    /**
     * @param ?string $orderUrlTemplate
     * @return $this
     */
    public function withOrderUrlTemplate(?string $orderUrlTemplate)
    {
        $this->orderUrlTemplate = $orderUrlTemplate;

        return $this;
    }


    public function build(): StoreOrderUrlTemplateSetMessagePayload
    {
        return new StoreOrderUrlTemplateSetMessagePayloadModel(
            $this->orderUrlTemplate
        );
    }

    public static function of(): StoreOrderUrlTemplateSetMessagePayloadBuilder
    {
        return new self();
    }
}
