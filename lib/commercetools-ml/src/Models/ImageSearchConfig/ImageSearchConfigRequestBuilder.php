<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImageSearchConfigRequest>
 */
final class ImageSearchConfigRequestBuilder implements Builder
{
    /**
     * @var ?ImageSearchConfigUpdateActionCollection
     */
    private $actions;

    /**
     * <p>The list of update actions to be performed on the project.</p>
     *
     * @return null|ImageSearchConfigUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?ImageSearchConfigUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?ImageSearchConfigUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): ImageSearchConfigRequest
    {
        return new ImageSearchConfigRequestModel(
            $this->actions
        );
    }

    public static function of(): ImageSearchConfigRequestBuilder
    {
        return new self();
    }
}
