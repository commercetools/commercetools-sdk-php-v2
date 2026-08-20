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
 * @implements Builder<StoreSetOrderUrlTemplateAction>
 */
final class StoreSetOrderUrlTemplateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderUrlTemplate;

    /**
     * <p>Value to set. Must be an <a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template containing the <code>orderId</code> variable.
     * If empty, any existing value is removed.</p>
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


    public function build(): StoreSetOrderUrlTemplateAction
    {
        return new StoreSetOrderUrlTemplateActionModel(
            $this->orderUrlTemplate
        );
    }

    public static function of(): StoreSetOrderUrlTemplateActionBuilder
    {
        return new self();
    }
}
