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
 * @implements Builder<StoreSetLanguagesAction>
 */
final class StoreSetLanguagesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $languages;

    /**
     * <p>Value to set.
     * Any attempt to use languages other than the ones defined in the <a href="ctp:api:type:Project">Project</a> will fail with a <a href="ctp:api:type:ProjectNotConfiguredForLanguagesError">ProjectNotConfiguredForLanguages</a> error.</p>
     *
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param ?array $languages
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }


    public function build(): StoreSetLanguagesAction
    {
        return new StoreSetLanguagesActionModel(
            $this->languages
        );
    }

    public static function of(): StoreSetLanguagesActionBuilder
    {
        return new self();
    }
}
