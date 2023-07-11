<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetLocaleAction>
 */
final class StagedOrderSetLocaleActionBuilder implements Builder
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


    public function build(): StagedOrderSetLocaleAction
    {
        return new StagedOrderSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): StagedOrderSetLocaleActionBuilder
    {
        return new self();
    }
}
