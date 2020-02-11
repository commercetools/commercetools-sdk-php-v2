<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewSetLocaleAction>
 */
final class ReviewSetLocaleActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $locale;

    /**
     * <p>If <code>locale</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }


    public function build(): ReviewSetLocaleAction
    {
        return new ReviewSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): ReviewSetLocaleActionBuilder
    {
        return new self();
    }
}
