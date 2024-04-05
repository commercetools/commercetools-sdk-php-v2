<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Attribution>
 */
final class AttributionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $clientId;

    /**

     * @var ?string
     */
    private $source;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> that created or modified the resource.</p>
     *

     * @return null|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * <p>Method used to initiate the creation or modification of the resource.</p>
     *

     * @return null|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param ?string $clientId
     * @return $this
     */
    public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param ?string $source
     * @return $this
     */
    public function withSource(?string $source)
    {
        $this->source = $source;

        return $this;
    }


    public function build(): Attribution
    {
        return new AttributionModel(
            $this->clientId,
            $this->source
        );
    }

    public static function of(): AttributionBuilder
    {
        return new self();
    }
}
