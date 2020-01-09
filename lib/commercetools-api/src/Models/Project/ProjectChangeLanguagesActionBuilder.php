<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

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
     * <p>.</p>
     *
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
