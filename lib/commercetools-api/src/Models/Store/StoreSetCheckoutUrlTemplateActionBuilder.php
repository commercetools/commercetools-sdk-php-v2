<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreSetCheckoutUrlTemplateAction>
 */
final class StoreSetCheckoutUrlTemplateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $checkoutUrlTemplate;

    /**
     * <p>Value to set. Must be an <a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template containing the <code>checkoutId</code> variable.
     * If empty, any existing value is removed.</p>
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


    public function build(): StoreSetCheckoutUrlTemplateAction
    {
        return new StoreSetCheckoutUrlTemplateActionModel(
            $this->checkoutUrlTemplate
        );
    }

    public static function of(): StoreSetCheckoutUrlTemplateActionBuilder
    {
        return new self();
    }
}
