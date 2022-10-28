<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeLanguagesAction>
 */
final class ProjectChangeLanguagesActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $languages;

    /**
     * <p>New value to set. Must not be empty.</p>
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


    public function build(): ProjectChangeLanguagesAction
    {
        return new ProjectChangeLanguagesActionModel(
            $this->languages
        );
    }

    public static function of(): ProjectChangeLanguagesActionBuilder
    {
        return new self();
    }
}
