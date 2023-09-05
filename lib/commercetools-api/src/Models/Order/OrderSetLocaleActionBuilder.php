<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetLocaleAction>
 */
final class OrderSetLocaleActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $locale;

    /**
     * <p>Value to set.
     * Must be one of the <a href="ctp:api:type:Project">Project</a>'s languages.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }


    public function build(): OrderSetLocaleAction
    {
        return new OrderSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): OrderSetLocaleActionBuilder
    {
        return new self();
    }
}
