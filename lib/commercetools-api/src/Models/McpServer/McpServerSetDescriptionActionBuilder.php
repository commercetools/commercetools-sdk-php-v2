<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<McpServerSetDescriptionAction>
 */
final class McpServerSetDescriptionActionBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * <p>Value to set. If omitted, the existing description is removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): McpServerSetDescriptionAction
    {
        return new McpServerSetDescriptionActionModel(
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description
        );
    }

    public static function of(): McpServerSetDescriptionActionBuilder
    {
        return new self();
    }
}
