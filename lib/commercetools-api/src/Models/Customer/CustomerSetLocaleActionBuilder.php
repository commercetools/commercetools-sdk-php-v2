<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetLocaleAction>
 */
final class CustomerSetLocaleActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $locale;

    /**
     * <p>Value to set.
     * Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
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


    public function build(): CustomerSetLocaleAction
    {
        return new CustomerSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): CustomerSetLocaleActionBuilder
    {
        return new self();
    }
}
