<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GoogleCloudFunctionDestination>
 */
final class GoogleCloudFunctionDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $url;

    /**
     * <p>URL to the target function.</p>
     *

     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param ?string $url
     * @return $this
     */
    public function withUrl(?string $url)
    {
        $this->url = $url;

        return $this;
    }


    public function build(): GoogleCloudFunctionDestination
    {
        return new GoogleCloudFunctionDestinationModel(
            $this->url
        );
    }

    public static function of(): GoogleCloudFunctionDestinationBuilder
    {
        return new self();
    }
}
