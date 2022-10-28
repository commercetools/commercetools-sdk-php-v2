<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceChangeActiveAction>
 */
final class StandalonePriceChangeActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $active;

    /**
     * <p>New value to set for the <code>active</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

        return $this;
    }


    public function build(): StandalonePriceChangeActiveAction
    {
        return new StandalonePriceChangeActiveActionModel(
            $this->active
        );
    }

    public static function of(): StandalonePriceChangeActiveActionBuilder
    {
        return new self();
    }
}
