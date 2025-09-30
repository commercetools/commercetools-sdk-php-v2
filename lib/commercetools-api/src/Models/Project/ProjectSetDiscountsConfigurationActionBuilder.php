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
 * @implements Builder<ProjectSetDiscountsConfigurationAction>
 */
final class ProjectSetDiscountsConfigurationActionBuilder implements Builder
{
    /**

     * @var null|DiscountsConfiguration|DiscountsConfigurationBuilder
     */
    private $discountsConfiguration;

    /**
     * <p>Configuration for the behavior of Cart and Product Discounts in the Project.</p>
     *

     * @return null|DiscountsConfiguration
     */
    public function getDiscountsConfiguration()
    {
        return $this->discountsConfiguration instanceof DiscountsConfigurationBuilder ? $this->discountsConfiguration->build() : $this->discountsConfiguration;
    }

    /**
     * @param ?DiscountsConfiguration $discountsConfiguration
     * @return $this
     */
    public function withDiscountsConfiguration(?DiscountsConfiguration $discountsConfiguration)
    {
        $this->discountsConfiguration = $discountsConfiguration;

        return $this;
    }

    /**
     * @deprecated use withDiscountsConfiguration() instead
     * @return $this
     */
    public function withDiscountsConfigurationBuilder(?DiscountsConfigurationBuilder $discountsConfiguration)
    {
        $this->discountsConfiguration = $discountsConfiguration;

        return $this;
    }

    public function build(): ProjectSetDiscountsConfigurationAction
    {
        return new ProjectSetDiscountsConfigurationActionModel(
            $this->discountsConfiguration instanceof DiscountsConfigurationBuilder ? $this->discountsConfiguration->build() : $this->discountsConfiguration
        );
    }

    public static function of(): ProjectSetDiscountsConfigurationActionBuilder
    {
        return new self();
    }
}
