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
 * @implements Builder<StoreCheckoutUrlTemplateSetMessagePayload>
 */
final class StoreCheckoutUrlTemplateSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $checkoutUrlTemplate;

    /**
     * <p>The <code>checkoutUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCheckoutUrlTemplateAction">Set Checkout Url Template</a> update action.</p>
     *

     * @return null|string
     */
    public function getCheckoutUrlTemplate()
    {
        return $this->checkoutUrlTemplate;
    }

    /**
     * @param ?string $checkoutUrlTemplate
     * @return $this
     */
    public function withCheckoutUrlTemplate(?string $checkoutUrlTemplate)
    {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;

        return $this;
    }


    public function build(): StoreCheckoutUrlTemplateSetMessagePayload
    {
        return new StoreCheckoutUrlTemplateSetMessagePayloadModel(
            $this->checkoutUrlTemplate
        );
    }

    public static function of(): StoreCheckoutUrlTemplateSetMessagePayloadBuilder
    {
        return new self();
    }
}
