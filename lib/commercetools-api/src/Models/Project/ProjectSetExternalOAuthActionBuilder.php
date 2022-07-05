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
 * @implements Builder<ProjectSetExternalOAuthAction>
 */
final class ProjectSetExternalOAuthActionBuilder implements Builder
{
    /**

     * @var null|ExternalOAuth|ExternalOAuthBuilder
     */
    private $externalOAuth;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        return $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth;
    }

    /**
     * @param ?ExternalOAuth $externalOAuth
     * @return $this
     */
    public function withExternalOAuth(?ExternalOAuth $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

        return $this;
    }

    /**
     * @deprecated use withExternalOAuth() instead
     * @return $this
     */
    public function withExternalOAuthBuilder(?ExternalOAuthBuilder $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

        return $this;
    }

    public function build(): ProjectSetExternalOAuthAction
    {
        return new ProjectSetExternalOAuthActionModel(
            $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth
        );
    }

    public static function of(): ProjectSetExternalOAuthActionBuilder
    {
        return new self();
    }
}
