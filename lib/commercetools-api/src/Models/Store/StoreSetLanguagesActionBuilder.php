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
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
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
